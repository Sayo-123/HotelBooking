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

$sql = "SELECT PkgID from `package` WHERE Pkg_des= '$Pkg_des';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pkgid = $row['PkgID'];
        echo "Pkgid:<br>";
        echo $pkgid;
        echo "<br>";
    }
}

$rtyid[50] = array();
$sql = "SELECT RtyID FROM `room`";
$i = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rtyid[$i] = $row['RtyID'];
        echo $rtyid[$i];
        echo "<br>";
        $i++;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$price[50] = array();
$rtydes[50] = array();
$k = 0;
$sql = "SELECT Rty_des FROM `room`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rtydes[$k] = $row['Rty_des'];
        $price[$k] = $_POST["$rtydes[$k]"];
        echo $price[$k];
        echo "<br>";
        $k++;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//$price[0]=$_POST[''];

$j = 0;
while ($j < $result->num_rows) {
    $sql = "INSERT INTO `price1`(`price`, `Pkg_ID`, `Rty_ID`) VALUES ($price[$j],$pkgid,$rtyid[$j])";
    if ($conn->query($sql) == TRUE) {
        $j++;
    }
}

$conn->close();
