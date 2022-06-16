<?php
include 'Connection.php';

$connection = new Connection();
$connect = $connection->Connect();


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback = $_POST['feedback'];


$sql = "INSERT INTO complain (name, email,phone,feedback) VALUES ('$name','$email','$phone','$feedback')";

if ($connect->query($sql) === TRUE) {
    echo "Complain received successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
$connect->close();
?>