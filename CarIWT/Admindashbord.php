<?php
	include_once'config.php';
	
?>

<html>
    <head>
        <title> page</title>
        <link rel="stylesheet" href="CSS/admindashbordStyle.css">
    </head>
    <body>
    <table class="tbl1">
        <tr>
          <th><img class="im1" src="images/logo.png" alt="Logo" height="200" width="200"></th>
          <th class="th1">Car Rental Service</th>
          <th>
            <ul style="text-align:center; background:transparent">
              <li><img style="text-align: center;" src="images/userlogo.png" alt="User account photo" width="60px" height="60px"></li>
              <li><div>
                    <button class="btn1" >Login</button>
                 </div>
                    
              </li>
            </ul>
          </th>
        </tr>
    </table>
    
    <!--Navigation bar-->
    <center>
        <h2>Admin Dashbord</h2>
    </center>
    

      <!--php-->
      <h2>booking details<h2>
        <?php
            $sql="select * from booking";
            $result=$conn -> query($sql);

            if($result->num_rows>0)
            {
                echo"<table><tr><td>BookID</td><td>Pickup date</td><td>Pickup time</td><td>Return date</td><td>Retun time</td><td>Vehicle</td><td>Noofpassengers</td><td>Massage</td><td>Registation ID</td></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo"<tr><td>".$row["BookingID"]."</td><td>".$row["PickupDate"]."</td><td>".$row["PickupTime"]."</td><td>".$row["ReturnDate"]."</td><td>".$row["ReturnTime"]."</td><td>".$row["Vehicle"]."</td><td>".$row["NoOfPassengers"]."</td><td>".$row["bookMassage"]."</td><td>".$row["Reg_ID"]."</td><tr>";
                }
            }

            else
            {
                echo"Empty Rows";
            }

            echo"</table>";

            //close the connection
            mysqli_close($conn);

        ?>
      
    </body>

    <hr>
    <footer style="background-color:rgb(121, 16, 16); height:100px; text-align: center;color: rgb(243, 234, 234);" >
    <p> privacy police| Accessibility <br> </p>
    </footer>
</html>