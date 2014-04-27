<?php
	include_once("wp-load.php");
	$price = $_POST['price'];
	//$email = $_POST['email'];
	echo do_shortcode('[wp_cart_button name="Безвъзмездно дарение" price="'.$price.'" email="'.$email.'"]');
?>