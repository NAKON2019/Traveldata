<?php
	include('include/config.php');
	if(isset($_POST['send'])) {
		$name = filter_input(INPUT_POST, 'name');
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$phone = filter_input(INPUT_POST, 'phone');
		$message = filter_input(INPUT_POST, 'message');

		$query = "INSERT INTO contactus VALUES(null, ?, ?, ?, ?, null)";
		$statement = $db->prepare($query);
		$statement->bindParam(1, $name, PDO::PARAM_STR);
		$statement->bindParam(2, $email, PDO::PARAM_STR);
		$statement->bindParam(3, $phone, PDO::PARAM_STR);
		$statement->bindParam(4, $message, PDO::PARAM_STR);
		$statement->execute();
		$success = $statement->rowCount();
		$statement->closeCursor();

		if($success == 0) { ?>
			<script type="text/javascript">
				window.alert('ERROR ALERT\nSomething went wrong, pleaes try again!');
				window.location = 'contact.php';
			</script><?php
			die();
		} else { ?>
		<script type="text/javascript">
				window.alert('SUCCESS ALERT\nYour Message was sent successfully!. We\'ll contact you as soon as possible.\n\nThanks!, From All of Us\n@Nakon-Tech!');
				window.location = 'contact.php';
			</script><?php
			die();
		}
}
?>