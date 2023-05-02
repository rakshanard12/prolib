<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">  
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script> 
    <style>
      body {
  background-image: url("https://www.westsussex.gov.uk/media/14910/libraries_stock.jpg?anchor=center&mode=crop&width=600&height=360&rnd=132502938920000000");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

label {
        display: inline-block;
        width: 150px;
        text-align:center;
      }
      table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
    </style>
</head>
        </style>
        </head>
        <body style="background-color:white;"><center>
            
            <?php
                 include("connection.php");
                 $Language=$_POST["Language"];
                 $sql="SELECT * FROM l2 WHERE Language='$Language'";
                 echo "Librarymanagement Database";
                 echo "<table border='3'>
                 <br><br><br><br>
                 <tr>
                 <th>Bookname</th>
                 <th>Bookid</th>
                 <th>Language</th>
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $rows['Bookname'] . "</td>";
        echo "<td>" . $rows['Bookid'] . "</td>";
        echo "<td>" . $rows['Language'] . "</td>";
        
        
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?>

</center>
        </body>
</html>