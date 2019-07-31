<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>
<!--All contents are dynamically fetch from backend-->
<body>
    <i onclick="window.open('process.php','_self');" class='fas fa-chevron-circle-left' style='font-size:36px'></i>

    <!--Nav bar for tabs-->
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#branches">
                    <h5>Add Branch</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#room">
                    <h5>Add Rooms</h5>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#packages">
                    <h5>Add Packages</h5>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="branches" class="container tab-pane active"><br>
                <table>
                    <form method="POST" action="branch.php">
                        <tr>
                            <td> <label for="b"><b>Branch:</b></label></td>
                            <td> <input type="text" id="Branch_nm" name="Branch_nm"></td>
                        <tr>
                        <tr>
                            <td> <label for="rtitle"><b>Address:</b></label></td>
                            <td> <input type="text" id="Branch_add" name="Branch_add"></td>
                        <tr>
                            <br>
                        <tr>
                            <td> <label for="bimg"><b>Image:</b></label></td>
                            <td> <input type="text" id="Branch_img" name="Branch_img"></td>
                        </tr>
                        <br>
                </table>
                <button type="submit" class="btn btn-primary" role="button" aria-pressed="true">ADD</button>
                </form>
            </div>
            <div id="room" class="container tab-pane fade"><br>
                <table>
                    <form method="POST" action="Room.php">
                        <tr>
                            <td> <label for="rimg"><b>Add Image:</b></label></td>
                            <td> <input type="text" id="Room_img" name="Room_img"></td>
                        <tr>
                        <tr>
                            <td> <label for="rtitle"><b>Title:</b></label></td>
                            <td> <input type="text" id="Rty_des" name="Rty_des"></td>
                        <tr>
                            <br>
                        <tr>
                            <td> <label for="rdes"><b>Description:</b></label></td>
                            <td> <input type="text" id="R_info" name="R_info"></td>
                        </tr>
                        <br>
                        <tr>
                            <td> <label for="rame"><b>Room-Amenities:</b></label></td>
                            <td> <input type="text" id="Room_Ame" name="Room_Ame"></td>
                        </tr>

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
                                <tr>
                                    <td> <label for="price"><b>Price for package:</b>&nbsp;<b><?php echo $row['Pkg_des']; ?></b></label></td>
                                    <td> <input type="number" id="price" name="<?php echo $row['Pkg_des']; ?>"></td>
                                </tr>
                            <?php
                            }
                        }
                        ?>
                        <br>
                </table>
                <button type="submit" class="btn btn-primary " role="button" aria-pressed="true">ADD</button>
                </form>
            </div>


            <div id="packages" class="container tab-pane fade"><br>
                <form method="POST" action="package.php">
                    <table>
                        <tr>
                            <td> <label for="Pkg_des"> <b>Package Description:</b></label></td>
                            <td> <input type="text" id="Pkg_des" name="Pkg_des" style="color:black;"></td>
                        </tr>
                        <br>
                        <?php
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "hotelbooking";
                        $conn = new mysqli($host, $user, $password, $db);

                        $sql = "SELECT Rty_des FROM `room`";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <label for="price"><b>Price for Room Type:</b>&nbsp;<b><?php echo $row['Rty_des']; ?></b></label></td>
                                    <td> <input type="number" id="price" name="<b><?php echo $row['Rty_des']; ?>"></b></td>
                                </tr>
                            <?php
                            }
                        }
                        ?>
                    </table>
                    <button type="submit" class="btn btn-primary" role="button" aria-pressed="true">ADD</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>