<?php
session_start();
$id  = $_SESSION['Branch_id']
?>
<!DOCTYPE html>
<html>

<head>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotelbooking";
    $conn = new mysqli($host, $user, $password, $db);

    $sql = "SELECT Branch_nm FROM `branches` WHERE Branch_ID=$id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <h1 style='font-family:serif; font-weight: bold;'>
                <?php echo $row['Branch_nm'] ?>
            </h1>
        <?php
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>

<body>
    <div class="container text-center">
        <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">
                        <img src="https://img.icons8.com/bubbles/70/000000/home-page.png" data-toggle="tooltip" title="Select another hotel"></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Map2.html">
                        <img src="https://img.icons8.com/bubbles/70/000000/google-maps.png" data-toggle="tooltip" title="Locate us"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <img src="https://img.icons8.com/bubbles/70/000000/camera.png" data-toggle="tooltip" title="Images/Events"></a>
                </li>
            </ul>
        </nav>
    </div>

    <br>
    <div class="div2">
        <form method="avail.php" action="POST">
            <div class="row">
                <div class="col" style="text-align: center;">
                    <?php
                    $sql = "SELECT Branch_img FROM `branches` WHERE Branch_ID=$id;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <img src="<?php echo $row['Branch_img']; ?>" width="300" height="200" style="margin: 50px; border:2;">
                        <?php
                        }
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    ?>
                </div>
                <div class="col" style="margin: 50px;">

                    <?php
                    $sql = "SELECT Branch_add FROM `branches` WHERE Branch_ID=$id;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <style='font-family:serif; font-weight: bold;'>
                                <?php echo $row['Branch_add'] ?>
                            <?php
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        ?>

                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
                <div class="container">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php
                        $sql = "SELECT Pkg_des, PkgID FROM `branches` INNER JOIN package WHERE Branch_ID=$id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <li class="nav-item">
                                    <a class='nav-link active' href="standard.php?pid=<?php echo $row['PkgID']; ?>" target="frame1" role='tab' id='std'><?php echo $row['Pkg_des'];
                                                                                                                                                        ?></a>
                                </li>
                            <?php
                            }
                        } else {
                            echo "Error.";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <!----------------------------------------------------------------->
        <div class="row">
            <div class="col">
                <?php $sql = "SELECT * FROM `room`;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <img src="<?php echo $row['Room_img']; ?>" width="300" height="200" style="margin: 50px; border:2;">
                    <?php
                    }
                } ?>
            </div>
            <div class="col" style="margin: 50px;">

                <?php $sql = "SELECT * FROM `room`;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <h4> <?php echo $row['Rty_des'];  ?></h4>
                        <p> <?php echo $row['R_info'];  ?></p>
                        <details>
                            <summary>Room Amenities</summary>
                            <ul>
                                <?php echo $row['Room_Ame'] ?>
                            </ul>
                        </details>
                        <br><br><br><br><br><br>
                    <?php
                    }
                } ?>
            </div>
            <hr>

            <div class="col">
                <iframe src="standard.php?pid=1" name="frame1" frameborder="0" height="3000" width="250" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="..\JS\formvalid.js"></script>
</body>

</html>