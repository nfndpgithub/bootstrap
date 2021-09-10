<?php
$connect=mysqli_connect('localhost','root','','korisnici');
$query="select id, ime, prezime, email from users order by id desc";
$result= mysqli_query($connect,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sort</title>
    
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  py-3 fixed-top ">
  <div class="container-fluid">
  <a href="#" class="navbar-brand">Frontend bootcamp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto d-lg-flex px-10">
        <li class="nav-item">
          <a class="nav-link active lead" aria-current="page" href="index.php">Nazad</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
<!-- table -->
<div class="container py-3  " align="center">
<h2 class="py-3" >Prijavljeni</h2>
<div class="table-responsive" id="table">
<table class="table ">
  <thead>
    <tr>
      <th  ><a class="column_sort" id="id" data-order="desc" href="#" >ID</a></th>
      <th  > <a class="column_sort" id="ime" data-order="desc" href="#">Ime</a></th>
      <th  > <a class="column_sort" id="prezime" data-order="desc" href="#">Prezime</a></th>
      <th  > <a class="column_sort" id="email" data-order="desc" href="#">Email</a></th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($row=mysqli_fetch_array($result)){

  ?>
    <tr>
      <td ><?php echo $row["id"] ?></td>
      <td><?php echo $row["ime"] ?></td>
      <td><?php echo $row["prezime"] ?></td>
      <td><?php echo $row["email"] ?></td>
    </tr>
  <?php 
  }
  ?>
    
  </tbody>
</table>
</div>
</div>

</body>
</html>
<script>

    
    $(document).ready(function(){
    $(document).on('click','.column_sort',function (){
      //alert("helloo");
         var column_name=$(this).attr("id");
        var order=$(this).data("order");
        var arrow='';
        
        if(order=='desc'){
            
            arrow='&nbsp; <span class="glyphicon glyphicon-arrow-down"></span>';
        }else{
            arrow='&nbsp; <span class="glyphicon glyphicon-arrow-up"></span>';
            
        }
        $.ajax({
           url:"query.php",
           method:"POST",
           data:{column_name:column_name,order:order},
           success:function(data){
             
                $('#table').html(data);
               //$('#'+column_name+'').append(arrow); 
 
           }
       }) 
    });
});

</script>