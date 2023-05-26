<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'section7');

if(!$connection) {
    die("Database conection failed");
}

?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	<pre>
	
<?php  

	$qeury = "SELECT * FROM mert";
	$result = mysqli_query($connection, $qeury);
	if(!$result ){
		die('qeury failed'. mysqli_error($connection));

	}

	while( $row = mysqli_fetch_assoc($result)) {
		print_r($row);
	}


	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>

</pre>







</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
