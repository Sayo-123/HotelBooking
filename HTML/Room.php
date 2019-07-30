<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "hotelbooking";
$conn = new mysqli($host, $user, $password, $db);

$Rty_des = $_POST["Rty_des"];
$R_info = $_POST["R_info"];
$Room_Ame = $_POST["Room_Ame"];
$Room_img = $_POST["Room_img"];




$sql = "INSERT INTO `room` (`Rty_des`,`R_info`,`Room_Ame`,`Room_img`) VALUES ('$Rty_des','$R_info','$Room_Ame','$Room_img')";
if ($conn->query($sql) == TRUE) {
    echo "Room Inserted Successfully!";
    //  header("Location:123.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT RtyID from `room` WHERE Rty_des= '$Rty_des';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rtyid = $row['RtyID'];
        echo "Rtyid:<br>";
        echo $rtyid;
        echo "<br>";
    }
}


$pkgid[50] = array();
$sql = "SELECT PkgID FROM `package`";
$i = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pkgid[$i] = $row['PkgID'];
        echo $pkgid[$i];
        echo "<br>";
        $i++;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$price[50] = array();
$pkgdes[50] = array();
$k = 0;
$sql = "SELECT Pkg_des FROM `package`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pkgdes[$k]=$row['Pkg_des'];
        $price[$k] = $_POST["$pkgdes[$k]"];
        echo $price[$k];
        echo "<br>";
        $k++;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$price[0]=$_POST[''];

$j=0;
while($j<$result->num_rows) {
$sql = "INSERT INTO `price1`(`price`, `Pkg_ID`, `Rty_ID`) VALUES ($price[$j],$pkgid[$j],$rtyid)";
if($conn->query($sql)==TRUE)
{
    echo "Success";
    $j++;
}
}

$conn->close();
