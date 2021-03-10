<?php

	include('../db/connection.php');

	if (isset($_POST['newsletter_email'])) 
	{
		
		$newsletter_email = mysqli_real_escape_string($con, $_POST['newsletter_email']);

		mysqli_query($con, "insert into newsletter(newsletter_email) VALUES('$newsletter_email') ");

	}

?>