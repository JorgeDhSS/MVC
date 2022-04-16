<?php
	//Zona de encabezado del desarrollo
	
	//echo "Hola mundo!";
	
	
	echo "<!-- Elaboró: Edsel -->\n";
	echo "<!-- Fecha: 14/03/2022 -->\n";
	echo "<!-- Versión: 0.1 -->\n";
	
	echo "<html>\n";
	echo "<head>\n";
	
	echo "<!-- Codificación de caracteres UTF-8 -->";
	echo "<meta charset=\"utf-8\">";
?>


		<!-- Llamada a un archivo externo de CSS -->
		<link rel="stylesheet" href="estilos.css">
		
		<!-- Código de JavaScript -->
		<script type="text/javascript">
			function enviarDatos()
			{
				alert(document.getElementById("txtMatricula").value + "algo");
			}
		</script>
	
	</head>


	<body>
		<a style="font-size:18px; font-weight:bold; color:#afaeae;">MVC</a>
		<br>
		<a style="font-size:14px; font-weight:bold; color:#afaeae;">Ejemplo práctico</a>
		<hr style="width:100%; height:4px; color:blue; background-color:blue;"></hr>
	
		<div style="font-size:14px; border-color:#434963; border-top:5px; border:1px solid; width:100%; height:200px;">
			
			<table border=0 style="">
				<tr>
					<td class="labelTable">
						Matrícula:
					</td>
					<td style="width:10px;"></td>
					<td style="width:100px;">
						<input id="txtMatricula" type="text" placeholder="Escribe una mátricula válida" >
					</td>
				</tr>
				<tr>
					<td></td><td style="width:10px;"></td><td style="width:100px;"><input id="btnEnviar" type="button" value="enviar" onclick="enviarDatos()"></td>
				</tr>
				
			</table>
		</div>
		
	
		
	</body>

</html>


