<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test Website for Server </title>
</head>
<body>
  
    <form action="okk.php" method="POST" name="testForm" onsubmit="return(validationFunc())">
    <fieldset>
    <p>Enter the first number</p>
      <input type="text" name="num1" id="num1"> <br><br>
      <p>Enter the second number</p>
      <input type="text" name="num2" id="num2"> <br> <br>
      <input type="submit" value="add"> <br>
      <script src="app.js"></script>
      
    ?> 
    </fieldset>
    </form>

    <table>
        <tr>
            <th>Number 1</th>
            <th>Number 2</th>
            <th>Result</th>
        </tr>
        <?php 
    $conn = mysqli_connect("localhost:3306 ", "julias2", "julias_123*", "table_db");
    if ($conn -> connect_error) {
        die("Connection Failed: ". $conn -> connect_error);

    }

    $sql = "SELECT no, isbn, title, author, price, category from book";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                echo "<tr><td>". $row["num1"]. "</td><td>". $row["num2"]. "</td><td>"
                . $row["result"]."</td></tr>";
            }
            echo "</table>";
    }
    else {
        echo  "0 result";
    }
    $conn -> close();
    ?>
    </table>
   
    
</body>
</html>