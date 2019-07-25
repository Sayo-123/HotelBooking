<!DOCTYPE html>
<html>

<head>
    <h1 style="font-family:serif; font-weight: bold;">Inspira</h1>
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
                    <a class="nav-link" href="Map3.html">
                     <img src="https://img.icons8.com/bubbles/70/000000/google-maps.png" data-toggle="tooltip" title="Locate us"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> 
                    <img src="https://img.icons8.com/bubbles/70/000000/camera.png" data-toggle="tooltip" title="Images/Events"></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="div3">
        <div class="row">
            <div class="col" style="text-align: center;">
                <img src="..\images\hyatpune.jfif" width="300" height="200" style="margin: 50px; border:2;">
            </div>
            <div class="col" style="margin: 50px;">
                <h3>Inspira Mumbai</h3>
                <div>Apollo Bandar, Colaba,</div>
                <div> Mumbai, Maharashtra 400001</div>
                <div>India</div>
            </div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="standard1.php" target="frame1" role="tab">Standard Rate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="bnb1.php" target="frame1" role="tab">Bed and Breakfast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="wifi.php" target="frame1" role="tab">Wi-fi</a>
                </li>
            </ul>
        </div>
        <!------------------------------------------------------------------------------>
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col">
                        <img src="..\images\kingbedIns.jpg" width="300" height="200" style="margin: 50px; border:2;">
                    </div>
                    <div class="col" style="margin: 50px;">
                        <h4>King Bed</h4>
                        <p> Enjoy this spacious 40-square-metre contemporary room with a plush Regency king bed,
                            modern bathroom, work desk.</p>
                        <details>
                            <summary>Room Amenities</summary>
                            <ul>
                                <li>1.Hairdryer</li>
                                <li>2.Individual air conditioning control</li>
                                <li>3.Iron/ironing board</li>
                                <li>4.24-hour concierge</li>
                                <li>5.Bottled water</li>
                            </ul>
                        </details>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        <img src="..\images\apart.jpg" width="300" height="200" style="margin: 50px; border:2;">
                    </div>
                    <div class="col" style="margin: 50px;">
                        <h4>One Bedroom Apartment</h4>
                        <p> Enjoy a comfortable stay in this 66-square-metre space luxury apartment,
                            with one Regency king bed, walk in closet</p>
                        <details>
                            <summary>Room Amenities</summary>
                            <ul>
                                <li>1.Washer/dryerr</li>
                                <li>2.Fully equipped Kitchen</li>
                                <li>3.In-room safe</li>
                                <li>4.24-hour concierge</li>
                                <li>5.Bottled water</li>
                            </ul>
                        </details>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <iframe src="standard1.php" name="frame1" frameborder="0" height="1500" width="300" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <hr>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="..\JS\formvalid.js"></script>



</body>

</html>