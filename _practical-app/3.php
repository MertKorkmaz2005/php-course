<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

if(3 < 2){
	echo "i love";

}elseif(10 > 20){
	echo "i dont love php";

}else{
	echo "i love php";

}




for($counter = 0;  $counter <= 10; $counter++){
	echo $counter . "<br>";
	
}

$number = 17;

switch($number){
	case 44;
	echo "it is 44";
	break;
	case 22;
	echo "it is 22";
	break;
	case 15;
	echo "it is 15";
	break;
	case 20;
	echo "it is 20";
	break;
	case 17;
	echo "it is 17";
	break;

	default:
	echo "i could not find";
	

}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP




	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>