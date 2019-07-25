<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>

<?php
if ($_POST["loc"] == '1') {
    echo '<body onload="showpune();">';
}

if ($_POST["loc"] == '2') {
    echo '<body onload="showmumbai();">';
}

if ($_POST["loc"] == '3') {
    echo '<body onload="shownagpur();">';
}

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelbooking";
$conn = new mysqli($host, $user, $password, $db);

//variables

$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$adult = $_POST["adult"];
$child = $_POST["child"];
$loc = $_POST["loc"];
$email = $_POST["email"];

$sql = "INSERT INTO `booking` (`Check_IN`,`Check_OUT`,`Adult`,`Child`,`Loc_ID`,`Email`) VALUES ('$checkin','$checkout','$adult','$child','$loc','$email');";
if ($conn->query($sql) == TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<h1 style="font-family: serif; font-weight: bold;">Select Hotel</h1>
<div class="container text-center">
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <label for="check-in-date">Check-In</label>
                <input type="text" disabled value="<?php echo $_POST["checkin"] ?>" class="date"><br>
            </li>&nbsp;

            <li class="nav-item">
                <label for="check-Out-date">Checkout</label>
                <input type="text" disabled value="<?php echo $_POST["checkout"] ?>" class="date"><br>
            </li>&nbsp;
            <li class="nav-item">
                <label for="adult" id="adultno">Adult</label><br>
                <?php
                echo $_POST["adult"]; ?>
            </li>&nbsp;
            <li class="nav-item">
                <label for="child" id="childno">Child</label><br>
                <?php
                echo $_POST["child"]; ?>
            </li>&nbsp;
            <li class="nav-item">
                <label for="email" id="email">E-mail</label><br>
                <?php
                echo $_POST["email"]; ?>
            </li>&nbsp;
            <li class="nav-item">
                <label for="location" id="location">Location</label><br>
                <?php
                echo $_POST["loc"];
                ?>
                <p id="x">js not working</p>
            </li>&nbsp;
        </ul>
    </nav>
</div>
<br>
<div class="div1">
    <div class="row" id="pune">
        <div class="col">
            <img src="..\images\hyatplace.jpg" width="240" height="182" border="2">
        </div>
        <div class="col">
            <h3><b>Inspira Place Pune</b></h3>
            Rajiv Gandhi Infotech Park, Phase 1
            Pune, Maharashtra 411057
            India
            <div class="b-text_copy-2 b-text_weight-bold">12.5 miles/20.1 km</div>
        </div>
        <div class="col" style=" font-size: 25px;">
            <b>&#8377 5,000</b>
            <h6>Avg/Night(INR)</h6>
            <a href="insplace.php"><button type="button" class="btn btn-warning">Select</button></a>
        </div>
    </div>


    <div class="row" id="mumbai">
        <div class="col">
            <img src="..\images\hyatpune.jfif" width="240" height="182" border="2">
        </div>
        <div class="col">
            <h3><b>Inspira Mumbai</b></h3>
            Apollo Bandar, Colaba,
            Mumbai, Maharashtra 400001
            India
            <div class="b-text_copy-2 b-text_weight-bold">0 miles/0 km</div>
        </div>
        <div class="col" style="font-size: 25px;">
            <b>&#8377 7,000</b>
            <h6>Avg/Night(INR)</h6>
            <a href="ins.php"><button type="button" class="btn btn-warning">Select</button></a>
        </div>
    </div>



    <div class="row" id="nagpur">
        <div class="col">
            <img src="..\images\hytre.jfif" width="240" height="182" border="2">
        </div>
        <div class="col">
            <h3><b>Inspira Regency</b></h3>
            Weikfield IT Park, Nagar Road
            Nagpur, Maharashtra 411006
            India
            <div class="b-text_copy-2 b-text_weight-bold">0.6 miles/1.0 km</div>

        </div>
        <div class="col" style="font-size: 25px;">
            <b>&#8377 10,000</b>
            <h6>Avg/Night(INR)</h6>
            <a href="insr.html"><button type="button" class="btn btn-warning">Select</button></a>
        </div>
    </div>
    <hr>
    <a href="homepage.php"><button type="button" id="back" class="btn btn-primary">Back</button></a>
</div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="..\JS\formvalid.js"></script>


</body>

</html>