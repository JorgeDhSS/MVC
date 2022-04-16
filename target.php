<?php
	//echo "Ando en target.php,";
	
	echo "Qué regresa ISSET: " . ISSET($_GET["matricula"]) . "<br>";
	
	if (ISSET($_GET["matricula"]))
		echo "<br>Matrícula: " . $_GET["matricula"]; 
	else 
		echo "No llegó la matrícula... ";
	
    echo "<br>Nombre: " . $_GET["nombre"];
	
	
	
	