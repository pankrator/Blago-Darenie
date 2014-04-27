<?php
	require("../wp-load.php");
	
	$return = array();
	
	$subject = "Добро дело";
	$givenEmail = $_POST['givenEmail']; //Toq deto e obeshtal
	$giverEmail = $_POST['giverEmail']; //Toq deto dava pari
	
if($givenEmail == "card") {
	$return['link'] = "http://blago-darenie.outernetnotes.com/postcard.png";
}
if($givenEmail == "certificate") {
	$return['link'] = "http://blago-darenie.outernetnotes.com/certificate.png";
}
if($givenEmail == "badge") {
	$return['link'] = "http://blago-darenie.outernetnotes.com/badge.png";
}

if(isset($return['link'])) {
	echo json_encode($return);
	exit();
}

	if($givenEmail != "") {
		$toGiver = $giverEmail." си избра Вашето обещание. Моля, свържете се с него по e-mail, за да изпълните обещанието си. Благодарим Ви за дарението!";
	}
	
	$toGiven = "Избрахте обещанието на ".$givenEmail.". Той ще се свърже с Вас, за да изпълни обещанието си. Благодарим Ви за дарението!";
	
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