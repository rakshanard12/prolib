<?php
include("connection.php");
$Bookid=$_POST["Bookid"];
$sql="DELETE FROM l2 where Bookid=$Bookid";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Data Deleted Successfully")</script>';
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>