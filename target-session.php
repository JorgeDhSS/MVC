<?php
	SESSION_START();
	
	if (ISSET($_POST["matricula"]) && $_POST["matricula"]!= "")
		$_SESSION["matricula"] = $_POST["matricula"];
	else
	{
		echo "Variable matrícula no definida o viene vacía...";
		header('Location: main-session.html');
		exit;
	}
	
	header('Location: show-data.php');

	