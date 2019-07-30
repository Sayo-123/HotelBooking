<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\CSS\custom.css">


</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#branches"> Add Branch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#room">Add Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#packages">Add Packages</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="branches" class="container tab-pane active"><br>
                ADD MORE BRANCH TO THIS LOCATION IF YOU WANT!!!
            </div>
            <div id="room" class="container tab-pane fade"><br>
                <table>
                    <form method="POST" action="Room.php">
                        <tr>
                            <td> <label for="rimg">Add Image:</label></td>
                            <td> <input type="text" id="Room_img" name="Room_img"></td>
                        <tr>
                        <tr>
                            <td> <label for="rtitle">Title:</label></td>
                            <td> <input type="text" id="Rty_des" name="Rty_des"></td>
                        <tr>
                            <br>
                        <tr>
                            <td> <label for="rdes">Description:</label></td>
                            <td> <input type="text" id="R_info" name="R_info"></td>
                        </tr>
                        <br>
                        <tr>
                            <td> <label for="rame">Room-Amenities:</label></td>
                            <td> <input type="text" id="Room_Ame" name="Room_Ame"></td>
                        </tr>
                        <tr>
                            <?php
                            $host = "localhost";
                            $user = "root";
                            $password = "";
                            $db = "hotelbooking";
                            $conn = new mysqli($host, $user, $password, $db);

                            $sql = "SELECT Pkg_des FROM `package`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <td> <label for="price">Prices:<?php echo $row['Pkg_des']; ?></label></td>
                                    <td> <input type="number" id="price" name="<?php echo $row['Pkg_des']; ?>"></td>
                                <?php
                                }
                            }
                            ?>
                        </tr>

                        <br>

                </table>
                <button type="submit" class="btn btn-primary">ADD</button>
                </form>

            </div>


            <div id="packages" class="container tab-pane fade"><br>
                <form method="POST" action="package.php">
                    <table>
                        <tr>
                            <td> <label for="rtitle">Room Description:</label></td>
                            <td> <input type="text" id="Rty_des" name="Rty_des"></td>
                        <tr>

                        <tr>
                            <td> <label for="Pkg_des"> Package Description:</label></td>
                            <td> <input type="text" id="Pkg_des" name="Pkg_des" style="color:black;"></td>
                        </tr>
                        <br>
                        <tr>
                            <td> <label for="price" id="price">Price:</label></td>
                            <td> <input type="number" name="price" style="color:black;"></td>
                        </tr>
                        <br>
                    </table>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
    </div>

    <a href="process.php"> <button type="button" class="btn btn-secondary">Back</button></a>

</body>

</html>