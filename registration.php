<?php
include 'Connection.php';

$connection = new Connection();
$connect = $connection->Connect();


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO user (name, email,password) VALUES ('$name','$email','$password')";

if ($connect->query($sql) === TRUE) {
    echo "User created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>