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
  <link rel="stylesheet" href="registerb.css">
  </head>
  <body>
    
  
    <p class="fw-bold fs-1 ms-5 my-5 ">Register Your Account as <span class="text-secondary fst-italic fw-semibold fs-1">Buyer</span></p>
  
<main>
   <form method="post" action="" class="text-center" >
    <input type="text"  placeholder="Yourname*" class="input" required  name="name"><br>
    
    <input type="email" name="email"  id="" class="mt-4 input" placeholder="Youremail*" ><br>

    <input type="password" name="password" id=""  class="mt-4 input" placeholder="Yourpassword*"><br>
    <select name="gender" class="form-select form-select-sm dropdown px-3 py-3 my-4" aria-label="Small select example">
      <option selected class="dropdown">Select your Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <div class="btn-div d-flex justify-content-center">
    <input type="submit" class=" py-2 px-3 text-center mt-3  btn btn-outline-dark " value="Register"></div>

    
    <p class="text-dark login mt-3 ">Already Registered?  <a href="loginb.php" class="link">login</a></p>
    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST")

{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $gender=$_POST["gender"];

$sql="INSERT INTO registerb ( name,email,password,gender) VALUES ('$name','$email','$password','$gender')";
if($conn->query($sql)===true)

{
//   echo '<div class="alert alert-secondary mt-3" role="alert">
//   Message sent successfully
// </div>';
header("location:loginb.php");
}
else
{
  echo "error";
}
}
// else{
//   echo"form not submitted";
// }

?>
   
  </main>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>