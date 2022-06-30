<?php 
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$result = $num1 + $num2;

echo "the result is: $result";

$conn = mysqli_connect("localhost", "root", "", "table_db");
if($conn -> connect_error) {
    die("Connection Failed:". $conn -> connect_error);
}

else {
    $stmt = $conn ->prepare("Insert into number_digits(num1, num2, result) values(? ,? ,? )");
    
    $stmt -> bind_param("iii", $num1, $num2, $result);
    $stmt -> execute();

    echo "User Input Successfully";
    
    $stmt -> close();
    $conn -> close();
}
?>
