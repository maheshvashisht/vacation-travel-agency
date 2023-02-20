<!DOCTYPE html>
<html lang="en">

<head>
  <title>Book now</title>
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
<!-- header  section -->
<?php
 include ("header.php");    
?>



<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg')"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Book Now</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span> Book Now </i></span>
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- section  section -->
<?php
include ("section.php");
?>
  

  
  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
         <div class="col-md-12 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form" method="POST">
            <div class="form-group">Name
              <input type="text" class="form-control" placeholder="Your Name"  name="em" />
            </div>

            <div class="form-group">Email Id
              <input type="text" class="form-control" placeholder="Your Email"  name="user"/>
            </div>

            <div class="form-group">Password
              <input type="password" class="form-control" placeholder="Your Password"  name="pass" />
            </div>

            <div class="form-group">Contact No.
              <input type="number" class="form-control" placeholder="Your Contact no."  name="no" />
            </div>
            
            <div class="form-group">
              <input type="submit" value="Book Now"  name="sub" class="btn btn-primary py-3 px-5" />
            </div>
          </form>
        </div>
        <?php
         if(isset($_POST['sub']))
           {
             $con=mysqli_connect("localhost","root","","project");
               $a= $_POST['em']; 
               $b= $_POST['user'];
               $c= $_POST['pass'];
               $d= $_POST['no'];

                // echo "$a";
                // echo "<br>";
                // echo "$b";
                // echo "<br>";
                $m="insert into customers (name,email,password,contact) values ('$a','$b','$c','$d')";
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
      </div>
     
      </div>
    </div>
  </section>


  <!-- footer  section -->
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