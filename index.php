<?php include("class_lib.php"); ?>
<?php

	$stefan = new person("Stefan Mischook");
	echo "Stefan's full name: " . $stefan->get_name();
	
	echo "Tell me a private stuff: " .$stefan->pinn_number;

?>
