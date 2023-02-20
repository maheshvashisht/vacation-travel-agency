<!DOCTYPE html>
<html lang="en">
<head>

    <title>5 col table</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
      <body>
 
 
        <?php
          $count=1;
         
          echo "<table border ='solid 4px' class='table table-striped table-dark'>
                 <tr>
                       <th>Sno</th>
                       <th>Image</th>
                       <th>Price</th>
                       <th>Days</th>
                       <th>Location</th>
                       <th>State</th>
                     </tr>";
          
        $con=mysqli_connect("localhost","root","","project");
        $m="select * from centre";
        $z=mysqli_query($con,$m);
           while($c=mysqli_fetch_array($z))
           {
              
              

               echo   '<tr>
                        <td> '.$count.' </td>
                        <td><img src="images/'.$c[1].'" style=" height: 200px;  " > </td>
                
                        <td> '.$c[2].'</td>
                        <td> '.$c[3].' </td>
                        <td> '.$c[4].'</td>
                        <td> '.$c[5].' </td>
                       
                      </tr>';
          
               $count++;
            }
            echo "</table>";

             
         

        ?>
     
 
</body>
</html>