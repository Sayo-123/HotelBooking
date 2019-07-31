<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="..\CSS\custom.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body class="login">
    <div id="frm">
        <form action="process.php" method="POST">
            <p>
                <label>Username :</label>
                <input type="text" id="user" name="user">
            </p>
            <p>
                <label>Password :</label>
                <input type="password" id="pass" name="pass">
            </p>
            <button type="submit" class="btn btn-primary">Login</button>
            </p>
        </form>
    </div>
</body>

</html>