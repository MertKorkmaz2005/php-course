<?php
//displays what is inside arrays
print_r($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$id = 10;
$button = "CLICK HERE";



?>


<a href="_mert_get.php?id=<?php echo $id;?>"><?php echo $button;?></a>



</body>
</html>