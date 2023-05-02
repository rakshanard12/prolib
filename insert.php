<?php
include("connection.php");
$Bookname=$_POST["Bookname"];
$Bookid=$_POST["Bookid"];
$Language=$_POST["Language"];
$sql="INSERT INTO l2(Bookname,Bookid,Language)VALUES('$Bookname','$Bookid','$Language')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("data inserted successfully")</script>';
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
