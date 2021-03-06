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
				if (document.getElementById("txtMatricula").value == "")
				{
					alert("Debes ingresar una matrícula...");
					return;
				}	

				if (document.getElementById("txtMatricula").length > 5)
				{
					alert("La matrícula puede tener máximo 5 dígitos...");
					return;
				}	

				var valoresAceptados = /^[0-9]+$/;
				if (!(document.getElementById("txtMatricula").value.match(valoresAceptados))){
					alert ("La matrícula no es un dato numérico");
					return;
				} 

				if (document.getElementById("txtTelefono").length > 10)
				{
					alert("El teléfono puede tener máximo 10 dígitos...");
					return;
				}	
				if (!(document.getElementById("txtTelefono").value.match(valoresAceptados))){
					alert ("El teléfono solo puede tener datos númericos");
					return;
				} 

				if (document.getElementById("txtCp").value == "")
				{
					if (document.getElementById("txtCp").length > 5)
					{
						alert("El código postal puede tener máximo 5 dígitos...");
						return;
					}	
					if (!(document.getElementById("txtCp").value.match(valoresAceptados))){
						alert ("El código postal solo puede tener números");
						return;
					} 
				}
				
				if (document.getElementById("txtNombre").value == "")
				{
					alert("Debes ingresar un nombre...");
					return;
				}	

				if (document.getElementById("txtApellidoP").value == "")
				{
					alert("Debes ingresar un apellido paterno...");
					return;
				}	

				if (document.getElementById("txtTelefono").value == "")
				{
					alert("Debes ingresar un telefono...");
					return;
				}	

				if (document.getElementById("txtEmail").value == "")
				{
					alert("Debes ingresar un nombre...");
					return;
				}	

                var regOficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
	
                if(!(regOficial.test(document.getElementById('txtEmail').value)))
                {
                    alert("Debes ingresar un correo válido...");
					return;
                }
				frmMain.submit();
			}
		</script>
	
	</head>


	<body>
	
		<form method="post" id="frmMain" name="frmMain" action="save-data.php" target="_blank"> 
			<a style="font-size:18px; font-weight:bold; color:#afaeae;">MVC</a>
			<br>
			<a style="font-size:14px; font-weight:bold; color:#afaeae;">Ejemplo práctico</a>
			<hr style="width:100%; height:4px; color:blue; background-color:blue;"></hr>
		
			<div style="font-size:14px; border-color:#434963; border-top:5px; border:1px solid; width:100%; height:300px;">
				
				<table border=0 style="">
					<tr>
						<td class="labelTable">Matrícula *:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtMatricula" name="matricula" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>
					
					<tr>
						<td class="labelTable">Nombre:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtNombre" name="nombre" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>
					
					<tr>
						<td class="labelTable">Apellido paterno:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtApellidoP" name="apellidoP" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>
					
					<tr>
						<td class="labelTable">Apellido materno:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtApellidoM" name="apellidoM" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>

                    <tr>
						<td class="labelTable">Teléfono:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtTelefono" name="telefono" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>
					
					<tr>
						<td class="labelTable">Correo:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtEmail" name="email" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>

					<tr>
						<td class="labelTable">Calle:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtCalle" name="calle" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>

                    <tr>
						<td class="labelTable">Colonia:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtColonia" name="colonia" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>
					
					<tr>
						<td class="labelTable">Codigo postal:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtCp" name="cp" type="text"></td>  <!-- Caja de texto donde recibe la matrícula -->
					</tr>
					
					<tr>
						<td class="labelTable">Fecha de nacimiento:</td><td style="width:10px;"></td><td style="width:100px;">
						<input id="txtFechaNac" name="fechaN" type="date"></td>  <!-- Caja de texto donde recibe la matrícula --> 
					</tr>

					<tr>
						<td></td><td style="width:10px;"></td><td style="width:100px;">
						<input id="btnEnviar" type="button" value="enviar" onclick="enviarDatos()"></td> <!-- Botón para el envío conectado a función de JS -->
					</tr>
					
				</table>
			</div>
		</form>
		<a style="font-size:2px;">nbsp;</a>
		<div style="font-size:14px; border-color:#434963; border-top:5px; border:1px solid; width:100%; height:200px;">
			<iframe style="font-size:14px; border-color:#434963; border-top:5px; border:1px dotted; width:100%; height:200px;" id="ifrData" src="show-data.php" frameborder="0">

			</iframe>
		</div>
	</body>
</html>