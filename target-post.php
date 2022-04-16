<?php
	$_SESSION_START;
	//echo "Ando en target.php,";
	
	//echo "Qué regresa ISSET: " . ISSET($_POST["matricula"]) . "<br>";
	
	if (ISSET($_POST["matricula"]))
		echo "<br>Matrícula: " . $_POST["matricula"]; 
	else 
		echo "No llegó la matrícula... ";
	
	if (ISSET($_POST["nombre"]))
		echo "<br>Nombre: " . $_POST["nombre"]; 
	else 
		echo "No llegó nombre... ";
	
	if ($_POST["matricula"] == "")
		echo "La matrícula llega vacía...<br>";
	
	
	echo "Continúo si problemas....";