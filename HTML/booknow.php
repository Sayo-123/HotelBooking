<?php
session_start();
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
    <div class="reser">
        <h3>Reservation</h3>
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
                    <td> <input type="name" id="name" name="fname"></td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name</label></td>
                    <td> <input type="lname" id="lname" name="lname"></td>
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
    </div>
    </form>
</body>

</html>