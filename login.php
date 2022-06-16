<?php
session_start();
include 'Connection.php';

$connection = new Connection();
$connect = $connection->Connect();

$user = $_POST['email'];
$password =$_POST['password'];


$sql = "SELECT * FROM user";

$result = mysqli_query($connect, $sql);

if (!$result) {
    echo "database error";
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}

while ($row = mysqli_fetch_array($result))
{

    if(($user == $row['email']) && $password == $row['password'] )
    {

        $_SESSION['email'] = $row['email'];

    }

}
$connect->close();

header("Location: index.php");



