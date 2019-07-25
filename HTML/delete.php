<?php 
 session_start();
 $id = $_SESSION["id"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotelbooking";
    $conn = new mysqli($host, $user, $password, $db);

    $sql="DELETE FROM `customer_det` WHERE `customer_det`.`Cust_ID`=$id";
    if ($conn->query($sql) == TRUE) {
        echo "Success";
        header("Location: booknow.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>

