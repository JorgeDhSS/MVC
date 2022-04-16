<?php
	session_start();
	
	if (ISSET($_SESSION["matricula"]))
		echo "Ando en show-data y recibí la matrícula hghghg: " . $_SESSION["matricula"];
	else
	{
		header('Location: main-session.html');
	}
	