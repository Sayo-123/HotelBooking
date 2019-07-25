<?php
session_start();
$id = $_SESSION["id"];
?>
<!DOCTYPE html>
<html>
<script src="..\JS\formvalid.js"></script>
<body>
    <?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotelbooking";
    $conn = new mysqli($host, $user, $password, $db);

    $prefix = $_POST["prefix"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phn = $_POST["phn"];
    $cnt = $_POST["cnt"];
    $add = $_POST["add"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];

    $sql = "UPDATE `customer_det` SET `Prefix`='$prefix', `First_name`='$fname', `Last_name`='$lname', `email`='$email', `Phone`=$phn, `Country`='$cnt', `Address`='$add', `City`='$city', `State`='$state', `Zip_code`=$zipcode WHERE `Cust_ID`=$id";
    if ($conn->query($sql) == TRUE) {
        echo "Success";
        header("Location: Billing.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();


    ?>

</body>

</html>