<?php
	require("../wp-load.php");
	
	$return = array();
	
	$subject = "Добро дело";
	$givenEmail = $_POST['givenEmail']; //Toq deto e obeshtal
	$giverEmail = $_POST['giverEmail']; //Toq deto dava pari
	
	if($givenEmail != "") {
		$toGiver = $givenEmail." си избра Вашето обещание. Моля, свържете се с него по e-mail, за да изпълните обещанието си. Благодарим Ви за дарението!";
	}
	
	$toGiven = "Избрахте обещанието на ".$giverEmail.". Той ще се свърже с Вас, за да изпълни обещанието си. Благодарим Ви за дарението!";
	
	if($giverEmail == '') {
		$return['error'] = true;
	}
	
	if($givenEmail != "") {
		if(wp_mail($givenEmail, $subject, $toGiver) && wp_mail($giverEmail, $subject, $toGiven)) {
			$return['success'] = true;
		}
	} else {
		if(wp_mail($giverEmail, $subject, "Благодарим Ви, за дарението!")) {
			$return['success'] = true;
		}
	}
	
	echo json_encode($return);
?>