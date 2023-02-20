<!DOCTYPE html>
<html lang="en">

<head>
  <title>contact</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />

  <link rel="stylesheet" href="css/aos.css" />

  <link rel="stylesheet" href="css/ionicons.min.css" />

  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/jquery.timepicker.css" />

  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/icomoon.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  
<?php
include ("header.php");
?>
  

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg')"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Contact Us</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Contact us </i></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php 
  include("section.php");
  ?>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form" method="POST">
            <div class="form-group">Name
              <input type="text" class="form-control" placeholder="Your Name"  name="em" />
            </div>

            <div class="form-group">Email Id
              <input type="text" class="form-control" placeholder="Your Email"  name="user"/>
            </div>

            <div class="form-group">Contact No.
              <input type="number" class="form-control" placeholder="Your Contact no."  name="no" />
            </div>
             
            Message
            <div class="form-group">
              <textarea name="mess" placeholder="Kindly wite your message :)" cols="55" rows="5"></textarea>
            </div>

            <div class="form-group">
              <input type="submit" value="Submit Here"  name="sub" class="btn btn-primary py-3 px-5" />
            </div>
          </form>
        </div>
        <?php
         if(isset($_POST['sub']))
           {
             $con=mysqli_connect("localhost","root","","project");
               $a= $_POST['em']; 
               $b= $_POST['user'];
               $c= $_POST['no'];
               $d= $_POST['mess'];

                // echo "$a";
                // echo "<br>";
                // echo "$b";
                // echo "<br>";
                $m="insert into contact (name,email,contact,message) values ('$a','$b','$c','$d')";
                $y=mysqli_query($con,$m);
               if($y)
               {
                echo"";
             }
             else{
                 echo"value not inserted";
             }
         
           }
           ?>

        <div class="col-md-6 d-flex">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.535674011379!2d76.38175191450932!3d30.33572258177724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028c109d1f091%3A0xbe8e475fb5ec5ed!2sLeela%20Bhawan%2C%20Bank%20Colony%2C%20Patiala%2C%20Punjab%20147001!5e0!3m2!1sen!2sin!4v1659502904344!5m2!1sen!2sin"
            width="600" height="570" style="border: 2px;;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

 <?php
 include("footer.php");
 ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>

</html>