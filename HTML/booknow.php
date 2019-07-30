<?php
session_start();
$id  = $_SESSION['Branch_id']

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php

                $host = "localhost";
                $user = "root";
                $password = "";
                $db = "hotelbooking";
                $conn = new mysqli($host, $user, $password, $db);

                $sql = "SELECT Branch_add, Branch_img, Branch_nm FROM `branches` WHERE Branch_ID=$id;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <img src="<?php echo $row['Branch_img']; ?>" width="300" height="200" style="margin: 30px;">
                        <h2 style="margin: 25px;" ><?php echo $row['Branch_nm']; ?></h2>
                        <p style="margin: 25px;"><?php echo $row['Branch_add'] ?></p> 
                    <?php
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                ?>

            </div>
            <div class="col-sm-6">
                <div class="reser">
                    <h3><u>Reservation</u></h3>
                    <form action="insert.php" method="POST">
                        <table id="res">
                            <tr>
                                <td><label for="prefix">Prefix</label></td>
                                <td> <select name="prefix">
                                        <option value="mr">Mr</option>
                                        <option value="mrs">Mrs</option>
                                        <option value="miss">Miss</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td><label for="name">First Name</label></td>
                                <td> <input type="text" id="name" name="fname"></td>
                            </tr>
                            <tr>
                                <td><label for="lname">Last Name</label></td>
                                <td> <input type="text" id="lname" name="lname"></td>
                            </tr>

                            <tr>
                                <td> <label for="email">Email</label></td>
                                <td> <input type="email" id="email" name="email"></td>
                            </tr>
                            <tr>
                                <td> <label for="phn">Phone Number</label></td>
                                <td><input type="number" id="phn" name="phn"></td>
                            </tr>


                            <tr>
                                <td> <label for="cnt">Country/Region</label></td>
                                <td> <select name="cnt" id="cnt">
                                        <option value="india">India</option>
                                        <option value="us">United States Of America</option>
                                        <option value="uk">United Kingdom</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td> <label for="add">Address</label></td>
                                <td> <input type="textarea" id="add" name="add"></td>
                            </tr>


                            <tr>
                                <td><label for="city">City</label></td>
                                <td><input type="text" id="city" name="city"></td>
                            </tr>
                            <tr>
                                <td><label for="state">State</label></td>
                                <td> <input type="text" id="state" name="state"></td>
                            </tr>
                            <tr>
                                <td><label for="zipcode">Zip Code</label></td>
                                <td><input type="text" id="pin" name="zipcode"></td>
                            </tr>
                        </table>

                        <a href="Billing.php"><button type="submit" class="btn btn-primary">Proceed to Payment</button></a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>