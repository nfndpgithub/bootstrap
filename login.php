<?php
  session_start();
  
  include ("connection.php");
  require 'functions.php';
  $object1=new functions();
  
  $user_data=$object1->check_login($con);

  if($_SERVER['REQUEST_METHOD']=="POST"){
    //nesto je postavljeno
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $ulica=$_POST['ulica'];
    $grad=$_POST['grad'];
    $drazva=$_POST['drazava'];



    if(!empty($firstName)&& !empty($lastName)&& !is_numeric($firstName)&& !is_numeric($lastName))
  {
    //sacuvaj u bazi
    $user_id= $object1->random_num(20);
    $query="insert into users (user_id,ime,prezime,tel,email,ulica,grad,drzava) values ('$user_id','$firstNamename','$lastName','$phone','$email','$ulica','$grad','$drzava')";
    mysqli_query($con, $query);
    echo "dfadfdsa";
    //header("Location: login.php"); posalje na uspesan login!!!
    //die;
  }else{
    echo "Molim Vas unesite tacne informacije!";
  }

  }
  
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <title>Prijava</title>
</head>
<?php 
  



?>
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
          <a class="nav-link active" aria-current="page" href="index.php">Nazad</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
<!-- forma -->
<section class="bg-dark text-light p-5  p-lg-0 pt-lg-5 text-center text-sm-start" >
    <div class="container">
        <h1 class="text-center mb-5">Prijava</h1>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputName" class="form-label" placeholder="Unesi ime">Ime</label>
    <input type="text" class="form-control" name="firstName">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Prezime</label>
    <input type="text" class="form-control" name="lastName">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Broj telefona</label>
    <input type="text" class="form-control" name="phone" placeholder="011/347-569">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Ulica</label>
    <input type="text" class="form-control" name="ulica">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Grad</label>
    <input id="text" class="form-control" name="grad">
    </input>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Drzava</label>
    <input type="text" class="form-control" name="drzava">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary  mt-2 mb-5">Prijavi se</button>
  </div>
</form>
    </div>
</section>


<!-- footer -->
<footer class="p-5 bg-dark text-white text-center position-relative h-auto">
      <div class="container">
        <p class="lead">Copyright &copy; 2021 <i class="bi bi-person ml-1"></i> Nemanja Fundup</p>
        <a href="" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>


    
</body>
</html>