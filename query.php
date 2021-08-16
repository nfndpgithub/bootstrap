<?php
$connect=mysqli_connect('localhost','root','','korisnici');
$output='';
$order=$_POST("order");
if($order=='decs'){
    $order='asc';
}else{
    $order='desc';
}
$query="select id ime,prezime, email from users order by ".$_POST["column_name"]." ".$_POST["order"]."";
$result=$mysqli_query($connect,$query);
$output.='

<table class="table " id="table">
  <thead>
    <tr>
      <th  ><a id="id" data-order="'.$order'" href="#">ID</a></th>
      <th  > <a id="ime" data-order="'.$order'" href="#">Ime</a></th>
      <th  > <a id="prezime" data-order="'.$order'" href="#">Prezime</a></th>
      <th  > <a id="email" data-order="'.$order'" href="#">Email</a></th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){

  $output.= '
    <tr>
      <th scope="row"><?php echo $row["id"] ?></th>
      <td><?php echo $row["ime"] ?></td>
      <td><?php echo $row["prezime"] ?></td>
      <td><?php echo $row["email"] ?></td>
    </tr>
  ';
  }
 $output=.'</tbody> </table>';
 echo $output;


?>