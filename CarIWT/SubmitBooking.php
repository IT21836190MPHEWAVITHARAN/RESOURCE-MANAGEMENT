<?php
	include_once'config.php';
	
?>

<?php
    $Firstname=$_POST["Firstname"];
    $Lastname=$_POST["Lastname"];
    $Email=$_POST["Emial"];
    $contact=$_POST["contact"];
    $password=$_POST["password"];
   

    $sql="insert into singup(Firstname, Lastname, Email, contact, password) values('', '$Firstname','$Lastname',' $Email','$contact','$password')";

    //execute the query
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('your redistration successfully')</script>";
		header("location:new.php");
    }

    else 
	{
		echo"<script>alert('Error in registration')</script>";
	}

    //close the sql connection
    mysqli_close($conn);

?>