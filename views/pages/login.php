<?php
use App\services\Page;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="/css/login_styles.css"
</head>
<body>
<?php
echo 1234;
?>
<form action="main" method="post">
    <h2>LOGIN</h2>
    <lable>User Name</lable>
    <label>
        <input type="text" name="uname" placeholder="User Name">
    </label><br>
    <lable>Password</lable>
    <label>
        <input type="password" name="password" placeholder="Password">
    </label><br>

    <button type="submit">Login</button>
</form>
</body>
</html>