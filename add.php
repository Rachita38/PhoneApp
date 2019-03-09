<?php
session_start();

//Connect to database
$db = mysqli_connect("localhost","root","","subscribers");

if(isset($_POST['Add_Subscriber']))
{
        $FirstName = mysqli_real_escape_string($db,$_POST['FirstName']);
        $LastName = mysqli_real_escape_string($db,$_POST['LastName']);
        $Address = mysqli_real_escape_string($db,$_POST['Address']);
        $PhoneNumber = mysqli_real_escape_string($db,$_POST['PhoneNo']);
    
                $sql="INSERT INTO Subscriber_Details(FirstName,LastName,Address,PhoneNumber) VALUES('$FirstName','$LastName','$Address','$PhoneNumber')";
                mysqli_query($db,$sql);
                
    }
                
else
{
        header("location:index.html");
                    
}   
?>
<!DOCTYPE html>
<html>
<head>
<title>Add and Delete Subscriber</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h1>Record added Sucessfully!!</h1> 
    </div>

</body>
</html>