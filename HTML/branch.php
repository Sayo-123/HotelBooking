<?php
session_start();
$aid=$_SESSION['aid'];

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelbooking";
$conn = new mysqli($host, $user, $password, $db);

$Branch_nm = $_POST["Branch_nm"];
$Branch_add = $_POST["Branch_add"];
$Branch_img = $_POST["Branch_img"];


$sql = "INSERT INTO `branches` (`Branch_nm`,`Branch_add`,`Branch_img`,`L_ID`) VALUES ('$Branch_nm','$Branch_add','$Branch_img',$aid)";
if ($conn->query($sql) == TRUE) {
    echo "Branch Inserted Successfully!";
    //  header("Location:123.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>