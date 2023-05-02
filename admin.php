<?php
include("connection.php");
$Username=$_POST["Username"];
$Userid=$_POST["Userid"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];

$sql="INSERT INTO l1(Username,Userid,Password,Email)VALUES('$Username','$Userid','$Password','$Email')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("logined successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}