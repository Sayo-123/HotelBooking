 <?php

    session_start();
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

    $sql = "INSERT INTO `customer_det` (`Prefix`,`First_name`,`Last_name`,`email`,`phone`,`Country`,`Address`,`City`,`State`,`Zip_code`) VALUES ('$prefix','$fname','$lname','$email','$phn','$cnt','$add','$city','$state','$zipcode');";
    if ($conn->query($sql) == TRUE) { } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = "SELECT Cust_ID FROM customer_det where email='$email';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["id"] = $row["Cust_ID"]; //set session var
            header("Location: Billing.php");
        }
    }

    $conn->close();
    ?>
