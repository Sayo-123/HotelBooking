<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>

<body>
    <div class="col" style="margin: 60px;">
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "hotelbooking";

        // Create connection
        $conn = new mysqli($host, $user, $password, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $pid = $_GET['pid'];

        $sql = "SELECT price, price_ID FROM price1 where Pkg_ID=$pid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "Price: " . $row["price"]  . "<br>";
                ?>
                <br>
                <a href="booknow.php?prid=<?php echo $row['price_ID']; ?>" target="_parent"><button type="button" class="btn btn-warning" name="Pstdkb">Select</button></a>
                <br><br><br><br><br><br><br><br><br><br>
            <?php

            }
        } else {
            echo "0 results";
        }
        ?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="..\JS\formvalid.js"></script>

</body>

</html>