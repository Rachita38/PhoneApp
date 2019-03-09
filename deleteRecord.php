<?php
$db = mysqli_connect("localhost","root","","subscribers");


$sql="DELETE from Subscriber_Details where id='$_GET[id]'";

if(mysqli_query($db,$sql))
    
    header("refresh:1;url=displayRecords.php");
else
    echo "Record not Deleted";


?>