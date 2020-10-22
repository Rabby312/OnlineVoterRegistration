<?php
//active status for user
	require_once("config.php");
	if(!empty($_GET["id"])) {
	$query = "UPDATE users set status = '1' WHERE id='" . $_GET["id"]. "'";
	$result = $db->query($query);
		if(!empty($result)) {
			echo "Your account is activated.";
		} else {
	               echo "Problem in account activation.";
		}
	}
?>
