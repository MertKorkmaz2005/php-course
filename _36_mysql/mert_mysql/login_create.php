
<?php

if(isset($_POST['submit'])){
    $username =   $_POST['username'];
    $password =  $_POST['password'];
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "we are connected";
    } else {
        die("Database conection failed");
    }

    $qeury = "INSERT INTO users(username,password) ";
    $qeury .= "VALUES('$username', '$password')";

    $result = mysqli_query($connection, $qeury);

    if(!$result ){
        die('qeury failed'. mysqli_error($connection));

    }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-xs-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>
</div>

</body>
</html>