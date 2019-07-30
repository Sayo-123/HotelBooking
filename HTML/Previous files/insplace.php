<!DOCTYPE html>
<html>

<head>
    <h1 style="font-family:serif; font-weight: bold;">Inspira Place</h1>
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
        <div class="row">
            <div class="col" style="text-align: center;">
                <img src="..\images\hyatplace.jpg" width="300" height="200" style="margin: 50px; border:2;">
            </div>
            <div class="col" style="margin: 50px;">
                <h3>Inspira Place Pune</h3>
                <div>Rajiv Gandhi Infotech Park,</div>
                <div>Phase 1 Pune,</div>
                <div>Maharashtra 411057</div>
                <div> India</div>
            </div>
        </div>
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class='nav-link active' href="standard.php" target="frame1" role='tab' id='std'>Standard Rate</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link active' href="bnb.php" target="frame1" role='tab' id='bnb'>Bed and Breakfast</a>
                </li>
            </ul>
        </div>

        <!----------------------------------------------------------------->
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col">
                        <img src="..\images\kingbed.jpg" width="300" height="200" style="margin: 50px; border:2;">
                    </div>
                    <div class="col" style="margin: 50px;">
                        <h4>King Bed</h4>
                        <p> A spacious 40- square-meter contemporary room with a plush Regency king bed,
                            Regency Club lounge access offering continental breakfast.</p>
                        <details>
                            <summary>Room Amenities</summary>
                            <ul>
                                <li>1.40 Inch or larger TV</li>
                                <li>2.Individual air conditioning control</li>
                                <li>3.Walk-In wardrobe</li>
                                <li>4.Robes and Sliper</li>
                                <li>5.Minibar</li>
                            </ul>
                        </details>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        <img src="..\images\exroom.jpg" width="300" height="200" style="margin: 50px; border:2;">
                    </div>
                    <div class="col" style="margin: 50px;">
                        <h4>Inspira Suite</h4>
                        <p> Enjoy the ambience of Inspira Suite offering 500 – 550 sq. ft king size room with world class
                            features.</p>
                        <details>
                            <summary>Room Amenities</summary>
                            <ul>
                                <li>1.40 Inch or larger TV</li>
                                <li>2.Individual air conditioning control</li>
                                <li>3.Walk-In wardrobe</li>
                                <li>4.Robes and Sliper</li>
                                <li>5.Minibar</li>
                            </ul>
                        </details>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col">
                        <img src="..\images\garden.jpg" width="300" height="200" style="margin: 50px; border:2;">
                    </div>
                    <div class="col" style="margin: 50px;">
                        <h4>Garden Suite</h4>
                        <p> This chic 530-600 sq ft suite situated on the 10th floor, offers private garden giving the privacy
                            you desire.</p>
                        <details>
                            <summary>Room Amenities</summary>
                            <ul>
                                <li>1.40 Inch or larger TV</li>
                                <li>2.Individual air conditioning control</li>
                                <li>3.Walk-In wardrobe</li>
                                <li>4.Robes and Sliper</li>
                                <li>5.Minibar</li>
                            </ul>
                        </details>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-sm-3">
                <iframe src="standard.php" name="frame1" frameborder="0" height="1500" width="300" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="..\JS\formvalid.js"></script>
</body>

</html>