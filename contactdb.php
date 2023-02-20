<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>data.php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 
     
        <?php
         
          echo "<table border ='solid 4px' class='table table-striped table-dark'>";
          echo  "<tr>";
          echo   "<th>Sno</th>";
          echo   "<th>Name</th>";
          echo   "<th>Email</th>";
          echo   "<th>Contact No</th>";
          echo   "<th>Message</th>";
          echo  "</tr>";
          
        $con=mysqli_connect("localhost","root","","project");
        $m="select * from contact";
        $z=mysqli_query($con,$m);
           while($c=mysqli_fetch_array($z))
           {
              
               
              
              echo "<tr>
                   <td> $c[0]  </td>
                   <td> $c[1]</td>
                   <td> $c[2] </td>
                   <td> $c[3] </td>
                   <td> $c[4] </td>
             
             
                  </tr>";
         

           }
          
           echo "</table>";
        ?>
 
</body>
</html>