<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chức năng đăng nhập</title>
    <style type="text/css">
        .login {
            height: 180px;
            width: 270px;
            margin: 0;
            padding: 10px;
            border: 1px #000000 solid;
        }

        .login input {
            padding: 5px;
            margin: 5px
        }
    </style>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30px" placeholder="username"><br>
        <input type="password" name="password" size="30px" placeholder="password"><br>
        <input type="submit" value="Sign in"/><br>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === 'admin' && $password === 'admin') {
            echo "<h2>Welcome <span style='color:red'>$username</span> to website</h2>";
        } else {
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }
    ?>
</form>
</body>
</html>
