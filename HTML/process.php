<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "hotelbooking";
$conn = new mysqli($host, $user, $password, $db);

if (isset($_POST['user'])) {
    $uname = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select * from login where username='" . $uname . "' AND  password='" . $pass . "' limit 1 ";

    if ($conn->query($sql) == TRUE) {
        echo "You Have Successfully LoggedIn!";
    } else {
        echo "You have entered incorrect password!";
    }
}
$conn->close();

?>
<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>

<body>
    <div class="tabs">
        <div class="container-tab">
            <ul class="nav nav-pills nav-stacked flex-column">
                <div class="row">
                    <div class="col">
                        <li class="active">
                            <a href="Locations.php" data-toggle="pill">Manage Locations</a></li>
                    </div>
                    <div class="col">
                        <li><a href="Customers.php" data-toggle="pill">Manage Customers</a></li>
                    </div>
                    <div class="col">
                        <li><a href="#tab-c" data-toggle="pill">Settings</a></li>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="..\JS\formvalid.js"></script>

</body>

</html>