<?php

if (isset($_POST['submit'])){

	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$city = $_POST['city'];
	$comment = $_POST['message'];

	$mailTo = "zaria.blews@hotmail.co.uk";
	$headers = "From: "
		.$mailFrom;
	$txt = "You have received an e-mail from". $name. ".\n\n".$message;

	mail($mailTo, $city, $txt, $headers);
	header("Location: index.php?mailsend");
}

?>