<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

	function calculate(){
		// echo 35 + 31;

		$number1 = 22;
		$number2 = 24;
		$total = $number1 + $number2;
		return $total;
	}

	$total = calculate();
	echo $total . "<br>";

	calculate();

	function addNumbers($number1, $number2){
		$total = $number1 + $number2;

		echo $total;

	}

	addNumbers(55,66);

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>