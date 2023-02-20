
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<form method="post"  enctype="multipart/form-data" style="border:solid 4px;">

Place Name       <input type="text" class="form-control" name="em" style="width: 10cm;"><br> 
Duration     <input type="text" class="form-control" name="duration" style="width: 10cm;"><br>
Price         <input type="number" class="form-control" name="price" style="width: 10cm;"> <br>
Details        <textarea name="details" class="form-control"  rows="5" ></textarea><br>
Image  &nbsp;   <input type="file"  name="img" > <br> <br>
<input type="submit" class="btn btn-success" name="sub">
</form>
</body>
</html>



        
   

 

<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
   $a=$_POST['em'];
   $b=$_POST['duration'];
   $c=$_POST['price'];
   $d=$_POST['details'];
   
    $pic=$_FILES['img']['name'];
    $temp=$_FILES['img']['tmp_name'];


   
    $path='5col/'.$pic;
    move_uploaded_file($temp,$path);



    $x="insert into packages(place_name,duration,price,details,image) values('$a','$b','$c','$d','$pic')";
    $y=mysqli_query($con,$x);
if($y){
    echo"inserted";
    header("location:5colt.php");
}
    else{
echo"not inserted";
    }

}








      
      
      
      
 