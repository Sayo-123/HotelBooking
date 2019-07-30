<?php
session_start();
$id = $_SESSION["id"];  //retrieve session var
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="..\CSS\custom.css">
    <script src="..\JS\formvalid.js"></script>

    <center>
        <h3><u>Your Details</u></h3>
    </center>
</head>

<body onload="getValues();">
    <div class="row" style="text-align:center;">
        <div class="col">
            <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "hotelbooking";
            $conn = new mysqli($host, $user, $password, $db);



            echo "<table id='bill'>
<tr>
   <td>Prefix:</td>
   <td id='getprefix'>";
            $sql = "call Personal_details($id);";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row["Prefix"];
                    echo "</td></tr><tr><td>First_name:</td><td id='getfname'>";
                    echo $row["First_name"];
                    echo "</td></tr><tr><td>Last_name:</td><td id='getlname'>";
                    echo $row["Last_name"];
                    echo "</td></tr><tr><td>email:</td><td id='getmail'>";
                    echo $row["email"];
                    echo "</td></tr><tr><td>Phone:</td><td id='getphn'>";
                    echo $row["Phone"];
                    echo "</td></tr><tr><td>Country:</td><td id='getctn'>";
                    echo $row["Country"];
                    echo "</td></tr><tr><td>Address:</td><td id='getadd'>";
                    echo $row["Address"];
                    echo "</td></tr><tr><td>City:</td><td id='getcity'>";
                    echo $row["City"];
                    echo "</td></tr><tr><td>State:</td><td id='getstate'>";
                    echo $row["State"];
                    echo "</td></tr><tr><td>Zip_code:</td><td id='getcode'>";
                    echo $row["Zip_code"];
                }
            }
            echo "</td>
</tr>
</table>"
            ?>
        </div>
        <div class="col">
            <div id="update">
                <form action="update.php" method="POST">
                    <?php
                    echo "<table id='bill'><tr><td>Prefix:</td><td><input type='text' name='prefix' id='a1'></td>";
                    echo $row["Prefix"];
                    echo "</td></tr><tr><td>First_name:</td><td><input type='text' name='fname' id='a2'></td>";
                    echo $row["First_name"];
                    echo "</td></tr><tr><td>Last_name:</td><td><input type='text' name='lname' id='a3'></td>";
                    echo $row["Last_name"];
                    echo "</td></tr><tr><td>email:</td><td><input type='email' name='email' id='a4'></td>";
                    echo $row["email"];
                    echo "</td></tr><tr><td>Phone:</td><td><input type='number' name='phn' id='a5'></td>";
                    echo $row["Phone"];
                    echo "</td></tr><tr><td>Country:</td><td><input type='text' name='cnt' id='a6'></td>";
                    echo $row["Country"];
                    echo "</td></tr><tr><td>Address:</td><td><input type='text' name='add' id='a7'></td>";
                    echo $row["Address"];
                    echo "</td></tr><tr><td>City:</td><td><input type='text'  name='city' id='a8'></td>";
                    echo $row["City"];
                    echo "</td></tr><tr><td>State:</td><td><input type='text' name='state' id='a9'></td>";
                    echo $row["State"];
                    echo "</td></tr><tr><td>Zip_code:</td><td><input type='number' name='zipcode' id='a10'></td>";
                    echo $row["Zip_code"];
                    echo "</td></tr></table>";

                    $conn->close();
                    ?>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-info" style="margin-left:250px;">Update My Record</button>
    </form>
    <a href="delete.php"><button type="submit" class="btn btn-info">Cancel My Booking</button></a>


</body>

</html>