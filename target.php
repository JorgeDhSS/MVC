<?php
	if (ISSET($_POST["user"]) && ISSET($_POST["password"]))
	{
		session_start();
        $_SESSION['user']  = $_POST["user"];
        $_SESSION['password']  = $_POST["password"];

		$enlace = mysqli_connect("127.0.0.1", "root", "root", "mvc");
		if (!$enlace) {
			echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
			echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
			echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		$sql = "SELECT * FROM user_login WHERE user='".$_POST["user"]."' AND password='".$_POST["password"]."'";
		 
		$result= $enlace->query($sql);
			   
		session_start();
		echo "MATRICULA EN SESIÓN: ".$_SESSION['matricula'];
		if ($result->num_rows > 0) 
		{
			header('Location: form.php');
		} else {
			printf('No se encontró el usuario.<br />');
			header('Location: login.php?message="No se encontró el usuario"');
		}
		mysqli_free_result($result);
		mysqli_close($enlace);
	}
	else 
	{
		echo "No llegaron los datos... ";
	}
		
	
	
	
	