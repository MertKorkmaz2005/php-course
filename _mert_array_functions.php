<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$list = [333,33,3,33,3,33,3,3,3,33,3];

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";
sort($list);

print_r($list);




?>

</body>
</html>