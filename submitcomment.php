<?php
	include("connect.php");

	$news = $bdd_site->prepare("INSERT INTO comments(email, pseudo, date, subject, msg, context) VALUES(:email, :pseudo, ADDDATE(NOW(), INTERVAL 2 HOUR), :subject, :msg, :context)");

	$news->execute(array(
		'email' => $_POST['email'],
		'pseudo' => $_POST['pseudo'],
		'subject' => $_POST['subject'],
		'msg' => $_POST['msg'],
		'context' => $_POST['context']
	));
?>