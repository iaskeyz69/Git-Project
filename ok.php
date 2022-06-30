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
    <form action="ok.php" method="POST">
    <fieldset>
    <p>Enter the first number</p>
      <input type="text" name="num1" id="num1"> <br><br>
      <p>Enter the second number</p>
      <input type="text" name="num2" id="num2"> <br> <br>
      <input type="submit" value="add"> <br>
      <script src="app.js"></script>
      <?php 
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $result = $num1 + $num2;

      echo "the result is: $result";
    ?> 
    </fieldset>
    </form>

    <table>
        <tr>
            <th>Number 1</th>
            <th>Number 2</th>
            <th>Result</th>
        </tr>
    </table>
   
    
</body>
</html>