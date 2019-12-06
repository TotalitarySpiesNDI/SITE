<?php include("liste_msg.php") ?>

<?php
	$msgs = $bdd_site->prepare("SELECT * FROM comments WHERE context=?");
	$msgs->execute($context);
	while($msg = $msgs->fetch()) {
		echo "<p>$msg['pseudo']$msg['subject']$email['email']</p>";
	}
?>