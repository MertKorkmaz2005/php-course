
<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "we are connected";
    } else {
        die("Database conection failed");
    }

    $qeury = "SELECT * FROM users";

    $result = mysqli_query($connection, $qeury);

    if(!$result ){
        die('qeury failed'. mysqli_error($connection));

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

    </div>

<?php 

while( $row = mysqli_fetch_assoc($result)) {

    ?>
    <pre>

    <?php
    print_r($row);

    ?>
    </pre>
    <?php

}

?>

   
</div>


</body>
</html>