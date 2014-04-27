<?php
	include_once("wp-load.php");
	$price = $_POST['price'];
	echo do_shortcode('[wp_cart_button name="Безвъзмездно дарение" price="'.$price.'"]');
?>