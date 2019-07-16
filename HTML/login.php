<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="..\CSS\custom.css">
</head>

<body id="login">
    <div id="frm">
        <form action="process.php" method="POST">
            <p>
                <label>Username :</label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label>Password :</label>
                <input type="password" id="pass" name="pass" />
            </p>
            <p>
                <input type="submit" id="btn" value="Login" name="Login" />
            </p>
        </form>
    </div>
</body>

</html>