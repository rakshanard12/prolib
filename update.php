<?php
include("connection.php");
$Bookid=$_POST["Bookid"];
// $p="payment cleared";
$sql="UPDATE emp SET ins = '$p' WHERE Bookid = $Bookid";
if($conn->query($sql) === TRUE){
    echo'<center><h1>Data Updated Successfully</h1></center>';
    
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>