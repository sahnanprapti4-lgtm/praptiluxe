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
<link rel="stylesheet" href="contact.css">  
</head>
  <body>
  <button type="button" class=" button btn btn-outline-dark  px-5 ">contact</button>
  <p class="fw-semibold display-5 text-start contacttext my-4 ">Contact with us</p>


  <div class="container text-center mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5  border-end ">
        <p class="fw-semibold display-4 text-start ">Our <br> Headquarters <br> </p>
        <p class="fw-semi-bold fs-5 text-start">370/49 street number-4 <br> civil city Ludhiana</p>
        
        <div class="phn d-flex mt-5">
            <div class="phnicon">
                <img src="images/phone-receiver-silhouette.png" alt=" " width="30px" class="mt-2">

            </div>
            <div class="phnnum">
                <p class="fw-semibold fs-3 ms-3">99156-71504</p>
            </div>

        </div>

        <div class="email d-flex">
            <div class="emailicon">
                <img src="images/email.png" alt="" width="30px" class="mt-3">
            </div>
            <div class="emailid">
                <p class="fw-semibold  fs-3 ms-3">sahnanprapti4@gmail.com</p>

            </div>

        </div>
        <div class="time d-flex mt-5">
            <div class="timeicon">
                <img src="images/clock.png" alt="" width="34px" class="mt-4 ms-5">

            </div>
            <div class="timetext">
                <p class="fw-semi-light mt-2 ms-2 fs-5 text-start">Monday-Sunday
                    <br>
                    24/7
                </p>

            </div>


    
      </div></div>
      <div class="col-md-5  contact_form border border-secondary rounded-3 p-5 ">
        <p class="fw-semibold display-4 text-start">Have a Question? <br>Write to us?</p>
        <form method=post class="text-start ">
            <div class="mb-3">

                <input type="text"class="form-control py-3"  id="exampleInputPassword1" placeholder="Yourname*"  name="name">
              </div>
              <div class="mb-3">

                <input type="tel" class="form-control py-3" id="exampleInputPassword1" placeholder="Yourphone*"  name="phone">
              </div>
            <div class="mb-3">
   
              <input type="email" class="form-control py-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Youremail*"  name="email">
             
            </div>
            <div class="mb-3">

               <textarea id="" class="form-control py-3" placeholder="Yourtext*"   name="msg"></textarea>
              </div>
            
              <input type="submit" value="Send a message" class="btn btn-outline-dark py-3 px-4">
          </form>
          <?php
          
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$msg=$_POST["msg"];


$sql="INSERT INTO contact(name,phone,email,msg) VALUES ('$name','$phone','$email','$msg')";

if($conn ->query($sql)===true)
{
  echo '<div class="alert alert-info mt-3" role="alert">
  Message sent successfully
</div>';
exit();

}
else{
  echo"error";
}
}
// else{
//   echo"form not submitted";
// }
?>
      </div>
      <?php
include('footer.php');
?>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>