<?php
	require("../wp-load.php");
	$email = $_POST['giverEmail'];
	if(wp_mail($email, "test", "tretsdfgfdgfdgdfgdfgdf")) {
		echo "success";
	}
	//echo $_POST['giverEmail'];
?>