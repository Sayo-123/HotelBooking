<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelbooking";
$conn = new mysqli($host, $user, $password, $db);

$Pkg_des = $_POST["Pkg_des"];

$sql = "INSERT INTO `package` (`Pkg_des`) VALUES ('$Pkg_des')";
if ($conn->query($sql) == TRUE) {
    echo "Package Inserted Successfully!";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
