

<html>

	<head>

		<!-- Codificación de caracteres UTF-8 -->
		<meta charset="utf-8">

		<!-- Llamada a un archivo externo de CSS -->
		<link rel="stylesheet" href="estilos.css">
		
		<!-- Código de JavaScript -->
		<script type="text/javascript">
			function enviarDatos()
			{
				if (document.getElementById("txtUser").value == "" || document.getElementById("txtPassword").value == "")
				{
					alert("Debes ingresar los datos requeridos");
					return;
				}	
				
	
				frmMain.submit();
			}
		</script>
	
	</head>


	<body>
		<?php
			if(ISSET($_GET["message"]))
			{
				echo $_GET["message"];
			}
		?>
		<form method="post" id="frmMain" name="frmMain" action="target.php" target="_blank"> 
			<a style="font-size:18px; font-weight:bold; color:#afaeae;">MVC</a>
			<br>
			<a style="font-size:14px; font-weight:bold; color:#afaeae;">Ejemplo práctico</a>
			<div style="margin: auto; width: 50%; border: 5px solid blue; color:blue; background-color:blue; padding: 10px; height:300px; font-size:34px;">
				<div style="width:100%; text-align: center; color:#afaeae; padding: 10px;">
					Usuario:
				</div>
				<div style="width:100%; text-align: center; padding: 10px;">
					<input id="txtUser" name="user" type="text" style="width: 50%; height: 35px;">
				</div>
				<div style="width:100%; text-align: center; color:#afaeae; padding: 10px;">
					Contraseña
				</div>
				<div style="width:100%; text-align: center; padding: 10px;">
					<input id="txtPassword" name="password" type="text" style="width: 50%; height: 35px;">
				</div>
				<div style="width:100%; text-align: center; padding: 10px;">
					<input id="btnEnviar" type="button" value="Enviar" onclick="enviarDatos()" style="width: 100px; height: 35px;">
				</div>
			</div>
		</form>
	</body>
</html>