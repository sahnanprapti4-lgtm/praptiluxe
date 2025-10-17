<?php
include('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="logins.css">
  </head>
  <body>
    
  
    <p class="fw-bold fs-1 ms-5 my-5 ">Login Your Account as <span class="text-secondary fst-italic fw-semibold fs-1">Buyer</span></p>
  
<main>
   <form action="" class="text-center" method="post" >
    
    <input type="email" name="email"  id="" class="mt-4 input" placeholder="Youremail*"><br>

    <input type="password" name="password" id=""  class="mt-4 input" placeholder="Yourpassword*"><br>
    <div class="btn-div d-flex justify-content-center">
    <input type="submit" class=" py-2 px-3 text-center mt-5  btn btn-outline-dark " value="Login"></div>
    <p class="text-dark login mt-3 ">Already Logged in?  <a href="registerb.php" class="link">register</a></p>

    <?php
   
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $email=$_POST["email"];
 $password=$_POST["password"];

 $sql="SELECT * FROM registerb WHERE email='$email' AND password='$password'";

 $result=$conn->query($sql);

 if($result->num_rows>0)
 {
  $_SESSION["email"]=$email;
 header("location:shop.php");
 }
 else
 {
  echo"invalid credentials";
 }
}


    ?>
  </main>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>