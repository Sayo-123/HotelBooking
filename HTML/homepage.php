<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="..\CSS\custom.css">

</head>

<body>
    <!--Navigation Bar of the homepage-->
    <nav class="navbar navbar-expand-md   navbar-dark bg-dark  sticky-top ">
        <button class="navbar-toggler" data-toggle="collapse" data-target="collapse-target">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse" id="collapse_targrt">
            <i class='fab fa-envira' style='font-size:36px;color: white;'></i>

            <span class="navbar-text">Inspira</span>
            <ul class="navbar-nav">
                <li class="nav-item" dropdown>
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                        Menu
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                        <a href="meet the team.html" class="dropdown-item">Meet Our Team</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">Offers</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Images.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MAP.html">Find Us Here</a>
                </li>

                <li>
                    <a class="nav-link" href="Aboutus.html">About Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Image slider  Section Starts here-->
    <div id="slider">
        <figure>
            <img src="..\images\luxroom.jpg">
            <img src="..\images\udp.jpg">
            <img src="..\images\rpj.jpg">
            <img src="..\images\Dining.jpg">
            <img src="..\images\gpm.jpg">
        </figure>
    </div>
    <!--Availability Section Starts here-->
    <div class="avail">
        <fieldset>
            <legend>Availability Check</legend>
            <form action="avail.php" method="POST">
                <table>
                    <tr>
                        <td><label for="check-in-date">Check-In</label></td>
                        <td><input id="datepicker" class="date" name="checkin"><br>
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="check-Out-date">Checkout</label></td>
                        <td>
                            <input id="datepicker1" class="date" name="checkout"><br>
                            <script>
                                $('#datepicker1').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="adult" style="margin: 4px;">Adult</label></td>
                        <td><input type="number" name="adult" class="number" id="adultno" style="margin: 4px;"></td>
                    </tr>
                    <tr>
                        <td><label for="child" style="margin: 4px;">Child</label></td>
                        <td><input type="number" name="child" class="number" id="childno" style="margin: 4px;"></td>
                    </tr>
                    <td><label for="email" style="margin: 4px;">E-mail</label></td>
                    <td><input type="email" name="email" id="email" style="margin: 4px;"></td>
                    <tr>
                        <td>Locations</td>
                        <td>
                            <select name='loc'>
                                <?php
                                $host = "localhost";
                                $user = "root";
                                $password = "";
                                $db = "hotelbooking";
                                $conn = new mysqli($host, $user, $password, $db);

                                $result = $conn->query("SELECT * FROM `locations1`");
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row['LocID']; ?>">
                                        <?php echo $row['Loc_des']; ?>
                                    </option>
                                <?php
                                }
                                ?>

                            </select>
                        </td>
                    </tr>

                </table>
                <center> <button type="submit" class="btn btn-primary">Submit</button> </center>
            </form>

        </fieldset>
    </div>
</body>

</html>