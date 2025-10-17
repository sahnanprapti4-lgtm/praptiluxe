<?php
ob_start();
include("config.php");
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="header.css">
  </head>
  <body>
    <div class="laptop-view d-none d-md-inline">
    <div class="container-fluid main_container">
        <div class="col-md-3 logo">
            <a href="index.php"><img src="images/logo4-removebg-preview.png" alt="" class="w-50"></a>
          </div>
        <div class="col-md-6 form">
         
    <input type="text" placeholder="Enter Your Search" class="w-75 w-lg-100 search">
      </div>
      <div class="col-md-3 rightnav">
      <div class="phn">
        <div class="bagicon ">
          <img src="images/telephone.png" alt="" class="" >
        </div>
          <div class="phnnumber">
            <p>+91 9915671504</p>
        </div>
      </div>
      <a href="cart.php" class="text-decoration-none text-dark">
<div class="bag">
  <div class="bagicon">
        <img src="images/bag.png" alt="">
      </div>
        <div class="bagmoney">
          <p>View cart</p>
      </div> 
  </div></a>
  </div>
</div>


<div class="container-fluid submain">
  
 <div class="offcanvas">

  <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    Link with href
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    Button with data-bs-target
  </button>
  
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
  
 </div>
<div class="nav2">
  <ul class="links">
    <li><a href="shop.php">shop</a></li>
    <li><a href="index.php">home</a></li>
    <li><a href="about.php">about</a></li>
    <li><a href="contact.php">contact</a></li>
  </ul>
</div>
<div>
  <?php
  if(isset($_SESSION["email"])){
    echo '
     <ul class="d-flex gap-3">
   <a href="logout.php" class="btn btn-outline-secondary">LOGOUT</a>
  </ul>
    ';
  }
  else{
    echo '
     <ul class="d-flex gap-3">
   <a href="registerb.php" class="btn btn-outline-secondary">REGISTER</a>
   <a href="loginb.php" class="btn btn-outline-secondary">LOGIN</a>
  </ul>
    ';
  }
  ?>
 
</div>

  
</div>
</div></div>




<div class="mobile-nav d-md-none">
<div class="container-fluid main_container d-flex ">
  <div class="col logo">
    <a href="index.php"><img src="images/download.jpg" alt=""></a>
    </div>
<div class="col rightnav d-flex justify-content-start gap-0">
<div class="phn">
  <div class="bagicon">
    <img src="images/telephone.png" alt="">
  </div>
    <div class="phnnumber">
      <p>+91 9915671504</p>
  </div>
</div>
<div class="bag">
<div class="bagicon">
  <img src="images/bag.png" alt="">
</div>
  <div class="bagmoney">
    <p>$0.00</p>
</div> 
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    

  


</div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>