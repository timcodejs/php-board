<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
    <div id="wrap" class="login_wrap">
        <div>
            <h1>Login Form</h1>
            <form action="login_ok.php" method="post" id="login_form">
                <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <!-- <p class="forgetpw"><a href="changepw.php">Forget Password?</a></p> -->
                <p><input type="submit" value="Login" class="login_btn"></p>
            </form>
        </div>
    </div>    
</body>
</html>