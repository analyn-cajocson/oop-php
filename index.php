<?php include("class_lib.php"); ?>
<?php

	$stefan = new person();
	$jimy = new person;
	$stefan->set_name("Stefan Mischook");
	$jimy->set_name("Nick Waddles");

	echo "Stefan's full name: " . $stefan->get_name();
	echo "Nick's full name: " . $jimy->get_name();

?>
