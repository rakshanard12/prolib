<html>
    <head>
        <style>
            h1{
          color:white;
          font-style:unset;
      }
      table {
  border-collapse: collapse;
  width: 50%;
  
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}

tr {background-color: #D6EEEE;}
    body {
  background-image: url("https://librarycarpentry.org/images/header-bg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
        
        </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
        </head>
        <body>
        <center><h1>LIBRARY MANAGEMENT</h1></center>

        
            <?php
                 include("connection.php");
                 //$ss=$_POST["ss"]; 
                 $sql="SELECT * FROM l2";
                 echo "                 <table border='1' class='center'>
                 <br><br><br><br>
                 <center><h2>BOOK'S DETAILS</h2></center>
                 <tr>
                 <th>Bookname</th>
                 <th>Bookid</th>
                 <th>Language</th>
                
                 
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
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
?></center>
        </body>
</html>