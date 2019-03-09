<?php
$db = mysqli_connect("localhost","root","","subscribers");
$sql="SELECT * from Subscriber_Details";
$records = mysqli_query($db,$sql);
?>

<html>
<head><title>Subcriber Details</title></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
     <div class="header">
        <h1>Subscriber Details</h1> 
    </div>

<table width="600" border="1" align="center">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Phone Number</th>
</tr>
<tr>
<?php

    while($subscriber = mysqli_fetch_assoc($records))
    {
    echo "<tr>";
    echo "<td>".$subscriber['FirstName']."</td>";
    echo "<td>".$subscriber['LastName']."</td>";
    echo "<td>".$subscriber['Address']."</td>";
    echo "<td>".$subscriber['PhoneNumber']."</td>";
    echo "<td><a href = deleteRecord.php?id=".$subscriber['id'].">Delete</a></td>";
    echo "</tr>";
    }    
    
?>
</tr>
   
</table>
</body>
</html>