<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	print_r($_GET). "<br>";
	$id = 5;
	$button = "CLICK ME";

	$name = "Mert";
	$value = 17;
	$expiration = time() + (60*60*24*7);

	setcookie($name,$value,$expiration);

	if(isset($_COOKIE["Mert"])){
		$mertsname = $_COOKIE["Mert"];
		echo $mertsname; 
	}else{
		$mertsname = "";
	}

	session_start();

	$_SESSION['mert'] = "mert is 17";

	if(isset($_SESSION['mert'])){
		echo $_SESSION['mert'];
		
	}





	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>

	<a href="9.php?id=<?php echo $id ?>"><?php echo $button ?></a>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>