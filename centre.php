<?php
 $con=mysqli_connect("localhost","root","","project");
 if(isset($_GET['x']))
 {
    $a=$_GET['x'];
    $m="select * from show_location where sno='$a'";
    $z=mysqli_query($con,$m);
    $c=mysqli_fetch_array($z);
    
    $b="insert into centre values('$c[0]','$c[1]','$c[2]','$c[3]','$c[4]','$c[5]')";
    $t=mysqli_query($con,$b);
    if($t)
    {
     header('location:destination.php');

    }



 }
 




?>
