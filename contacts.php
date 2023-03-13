<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="sample.css">
        <style>
            x1,table,th,td{
                font-size:20px;
                margin-left:37%;
                position:center;
                padding:5px;
                text-align:center;
                border-radius:5px;
                background-color:lightyellow;
                color:black;
              

            }
        </style>
    </head>
    <body>
    <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">MyAreca</a>
      </div>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="types.html">TYPES</a></li>
        <li><a href="products.html">PRODUCTS</a></li>
        <li><a href="yield.html">YIELD FORECAST</a></li>
        <li><a href="diseases.html">DISEASES</a></li>
        <li><a href="pests.html">PESTS</a></li>
        <li><a href="https://www.krishimaratavahini.kar.nic.in/MainPage/DailyMrktPriceRep2.aspx?Rep=Com&CommCode=140&VarCode=1&Date=12/10/2018&CommName=Arecanut%20/%20%E0%B2%85%E0%B2%A1%E0%B2%BF%E0%B2%95%E0%B3%86&VarName=Red%20/%20%E0%B2%95%E0%B3%86%E0%B2%82%E0%B2%AA%E0%B3%81">TODAY'S RATES </a></li>
        <li><a href="contacts.php">CONTACT</a></li>
      </ul>
    </div>
  </nav>
  <div class="img1">
  <div class="center">
    <div class="title2"> Dealers Contact</div> 
    </div> 
  </div>
  <x1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "miniProj";
    $conn = mysqli_connect($servername, $username, $password, $dbname);  //The MySQLi functions allows you to access MySQL database servers.
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);
    echo "<br>";
    echo "<table border='2'>";
    echo "<th colspan=4 >ARECANUT FRUIT DEALERS<br></th>";
    echo "<tr>";
    echo "<th>SL NO</th><th>NAME</th><th>PHONE NUMBER</th><th>LOCATION</th> </tr>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) // fetches a result row as an associative array
        {
            echo "<tr>";
            echo "<td>" . $row["slno"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["phno"] . "</td>";
            echo "<td>" . $row["locality"] . "</td></tr>";
        }
    } else {
        echo "Table is Empty";
    }
    echo "</table>";


?>
</x1> 
    
</body>
</html>