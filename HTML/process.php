<?php
session_start();


$host = "localhost";
$user = "root";
$password = "";
$db = "hotelbooking";
$conn = new mysqli($host, $user, $password, $db);

if (isset($_POST['user'])) {
    $uname = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select * from login where username='$uname' AND password=DES_ENCRYPT('$pass');";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["aid"] = $row["ID"]; //set session var

        }
    } else {
        echo "<script> alert('You have entered incorrect password!');
        window.top.location.href ='login.php';
        </script>";
    }
}
$aid = $_SESSION["aid"];

?>
<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>

<body>
    <a href="logout.php"><button type="button" class="btn btn-default" style="float:right;">Logout</button>
        <div class="tabs">
            <div class="container-tab">
                <?php
                $sql = "SELECT Loc_des FROM `login` inner JOIN locations1 WHERE login.Loc_ID=locations1.LocID AND ID=$aid;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                        echo "<u><p style='font-size:40px; color:black;'>Welcome to location : ";
                        echo $row['Loc_des'];
                        echo  "</p>";
                    }
                } else {
                    echo "error!";
                }
                ?>
                <ul class="nav nav-pills nav-stacked flex-column">
                    <div class="row">
                        <div class="col">
                            <li class="active">
                                <a href="Loc_pune.php" data-toggle="pill">
                                    <i class="fa fa-hotel" style="font-size:36px"></i>
                                    <h4>Manage Locations</h4>
                                </a></li>
                        </div>
                        <div class="col">
                            <li><a href="Customers.php" data-toggle="pill">
                                    <i class="fa fa-users" style="font-size:36px"></i>
                                    <h4>Manage Customers</h4>
                                </a></li>
                        </div>
                        <div class="col">
                            <li><a href="#tab-c" data-toggle="pill">
                                    <i class="fa fa-gear" style="font-size:36px;"></i>
                                    <h4>Settings</h4>
                                </a></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <?php
        $conn->close();
        ?>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="..\JS\formvalid.js"></script>

</body>

</html>