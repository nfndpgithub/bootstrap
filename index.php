<?php
  session_start();
  include "database.php";
  $_SESSION;
  $mydb2=new Database('korisnici');

  if($_SERVER['REQUEST_METHOD']=='POST'){
    //nesto je postavljeno
    $mydb2->sacuvaj();
   



   

  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <title>Frontend bootcamp</title>
  </head>
  <body>
    <!-- navbar -->

   <!--  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top ">
      <div class="container">
        <a href="#" class="navbar-brand">Frontend bootcamp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navmenu">
          <ul class="nabar-nav ms-auto d-lg-flex px-10 ">
            <li class="nav-item ">
              <a href="#learn" class="nav-link text-white">O nama</a>
            </li>
            <li class="nav-item">
              <a href="#questions" class="nav-link text-white">Pitanja</a>
            </li>
            <li class="nav-item">
              <a href="#instructors" class="nav-link text-white">Prijavi se za kurs</a>
            </li>
          </ul>



        </div>
      </div>
    </nav> -->
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark  py-3 fixed-top ">
  <div class="container-fluid">
  <a href="#" class="navbar-brand">Frontend bootcamp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto d-lg-flex px-10">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#oNama">O nama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#questions">Pitanja</a>
        </li>
        <li class="nav-item">
              <a href="#instructors" class="nav-link ">Nastavnici</a>
        </li>
        <li class="nav-item">
              <a href="sort.php" class="nav-link ">Prijavljeni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Prijavi se za kurs</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
    <!-- showcase -->
    <section id="oNama" class="bg-dark text-light p-5  p-lg-0 pt-lg-5 text-center text-sm-start">
      <div class="container">
        <div class="d-sm-flex align-item-center justify-content-between">
          <div> 
            <h1>Postani <span class="text-warning">web developer</span></h1>
            <p class="lead my-4">Postanite najbolji web developer u gradu. Prijavite se za nas kurs molimo Vas.</p>
            <a href="login.php">
              <button class="btn btn-primary btn-lg" href="login.php">Prijavi se za kurs</button>
            </a>
            
          </div>
          <img class="img-fluid w-10  d-none d-sm-block" src="prog.svg" alt="">
        </div>
      </div>
    </section>
    <!-- newsletter area -->
    <form action="" method="post">
    <section class="bg-primary text-light p-5">
      <div class="container">
      <div class="d-md-flex justify-content-between align-item-center">
        <h3 class="mb-3 mb-md-0">Prteplatite se za novosti</h3>
        
        <div class="input-group news-input">
          <input type="text" class="form-control" name=email placeholder="Unesi email" >
          <button class="btn btn-dark btn-lg" type="submit"  >Pretplati se</button>
        </div>

      </div>
    </div>
    </section>
    </form>
    <!-- boxes  -->
    <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-bricks"></i>
                </div>
                <div>
                  <h3 class="card-title mb-3">
                    HTML
                  </h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat voluptatem modi quam similique eveniet harum corporis nulla nihil ex voluptatum laborum nostrum accusantium, dolores asperiores. Omnis nemo a veritatis ad?</p>
                  <a href="#" class="btn btn-primary">Više</a>
                </div>
                
              </div>

            </div>
          </div>
          <div class="col-md">
            <div class="card bg-secondary text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-brush"></i>
                </div>
                <div>
                  <h3 class="card-title mb-3">
                    CSS
                  </h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat voluptatem modi quam similique eveniet harum corporis nulla nihil ex voluptatum laborum nostrum accusantium, dolores asperiores. Omnis nemo a veritatis ad?</p>
                  <a href="#" class="btn btn-dark">Više</a>
                </div>
                
              </div>

            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-file-earmark-code"></i>
                </div>
                <div>
                  <h3 class="card-title mb-3">
                    Java script
                  </h3>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat voluptatem modi quam similique eveniet harum corporis nulla nihil ex voluptatum laborum nostrum accusantium, dolores asperiores. Omnis nemo a veritatis ad?</p>
                  <a href="#" class="btn btn-primary">Više</a>
                </div>
                
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- learn -->
   
    <section  id="learn" class="p-5 bg-dark">
      <div class="container">
        <div class="row align-items-center justify-content-between  text-light">
          
          <div class="col-md p-5">
            <h2>Learn the react</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis culpa consequuntur numquam non, rem facilis aliquid officiis quas similique enim suscipit quis eligendi! Atque praesentium at tempore laudantium id.</p>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, omnis culpa consequuntur numquam non, rem facilis aliquid officiis quas similique enim suscipit quis eligendi! Atque praesentium at tempore laudantium id.</p>
            <a href="" class="btn btn-light mt-3"> <i class="bi bi-chevron-right"></i>read more</a>
          </div>
          <div class="col-md">
            <img src="prog.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- question accordion -->
    <section id="questions" class="p-5">
      <div class="container">
        <h2 class="text-center mb-4 ">Najcesca Pitanja</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one" aria-expanded="false" aria-controls="flush-collapseOne">
                Gde se nalazite?
              </button>
            </h2>
            <div id="question-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
              <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut a illo cumque! Consequuntur ipsum doloribus velit recusandae minima earum id, harum sapiente error beatae. Totam nisi cum veritatis quas sit aperiam facere hic eligendi, repudiandae dolorum cupiditate odio accusantium necessitatibus sunt dolor beatae deserunt at perspiciatis, quos quisquam unde suscipit.</div>
            </div>
          </div>
          <!-- item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two" aria-expanded="false" aria-controls="flush-collapseTwo">
                Koliko kosta kurs?

              </button>
            </h2>
            <div id="question-two" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis molestias optio laboriosam quisquam mollitia nam sed deserunt voluptas ratione. Assumenda nemo delectus distinctio ea iure soluta asperiores quas ab, expedita alias sunt ipsum officia eaque! Voluptatem fugit omnis, nemo magni saepe rem nesciunt veniam tempore. Eum aliquid sit praesentium necessitatibus illum saepe animi accusamus error vero assumenda! Dignissimos ratione reiciendis, quae possimus similique magnam alias molestiae laboriosam laborum? Architecto culpa consequuntur fuga similique perspiciatis nam? Ut, blanditiis. Rem praesentium debitis iste deleniti eius voluptatum obcaecati autem, deserunt aspernatur? Assumenda nostrum velit saepe dolore tempora officia facilis doloremque molestias labore rem! <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
          </div>
          <!-- item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three" aria-expanded="false" aria-controls="flush-collapseThree">
                Da li mi treba predznadnje?
              </button>
            </h2>
            <div id="question-three" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quo nobis excepturi, illo facilis ratione, dolore culpa non quas obcaecati dolorem accusamus debitis dicta quisquam odit id. Eius commodi eligendi, enim soluta iste impedit ut amet aperiam laudantium maiores dolor sapiente ad dolorum, inventore nobis ea ex assumenda est aut dignissimos modi nesciunt ipsum perspiciatis! Atque tempora ipsum iure pariatur unde beatae qui, dolorem architecto ab iusto quod harum, corporis consequatur dicta mollitia, voluptatem odit optio? Natus perferendis aperiam dolores. Veniam inventore sed exercitationem non autem doloremque pariatur odit, nobis est, illo voluptatibus vitae similique at rerum, unde cum ratione.<code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="instructors" class="p-5 bg-primary">
      <div class="container">
        <h2 class="text-center text-white">Nastavnici</h2>
        <p class="lead text-center text-white mb-5"> Ovo su nasi najbolji nastavnici. Mi bolje nemamo!
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/men/13.jpg" class="rounded-circle mb-3" alt="">
                <h3 class="card-title mb-3">Milan Nikotinovic</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima id veritatis mollitia blanditiis, 
                assumenda nisi cumque impedit numquam ad fuga sapiente, aliquid alias sequi eos optio recusandae minus delectus inventore!</p>
                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/3.jpg" class="rounded-circle mb-3" alt="">
                <h3 class="card-title mb-3">Slavica Tesanovic</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima id veritatis mollitia blanditiis, 
                assumenda nisi cumque impedit numquam ad fuga sapiente, aliquid alias sequi eos optio recusandae minus delectus inventore!</p>
                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/men/15.jpg" class="rounded-circle mb-3" alt="">
                <h3 class="card-title mb-3">Nikola Petrovic</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima id veritatis mollitia blanditiis, 
                assumenda nisi cumque impedit numquam ad fuga sapiente, aliquid alias sequi eos optio recusandae minus delectus inventore!</p>
                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>

              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img src="https://randomuser.me/api/portraits/women/20.jpg" class="rounded-circle mb-3" alt="">
                <h3 class="card-title mb-3">Hana Aric</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima id veritatis mollitia blanditiis, 
                assumenda nisi cumque impedit numquam ad fuga sapiente, aliquid alias sequi eos optio recusandae minus delectus inventore!</p>
                <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2021 Nemanja Fundup</p>
        <a href="" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
