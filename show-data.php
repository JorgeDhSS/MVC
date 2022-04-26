<?php

    $enlace = mysqli_connect("127.0.0.1", "root", "root", "mvc");
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
   /* echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;*/
    
    $sql = "SELECT * FROM Usuarios";
		 
    $result= $enlace->query($sql);
           
    session_start();
    echo "MATRICULA EN SESIÓN: ".$_SESSION['matricula'];
    if ($result->num_rows > 0) 
    {
        echo "<table>";
        echo "<tr> <th>Id</th> <th>Matricula</th> <th>Nombre</th> <th>Apellido paterno</th> <th>Apellido Materno</th> <th>Teléfono</th> <th>Correo</th> <th>Calle</th> <th>Colonia</th> <th>Código postal</th> <th>Fecha de nacimiento</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>"; 
                echo "<td>". $row["idUsuarios"] . "</td>";
                echo "<td>". $row["matricula"] . "</td>";
                echo "<td>". $row["nombre"] . "</td>";
                echo "<td>". $row["apellidoP"] . "</td>";
                echo "<td>". $row["apellidoM"] . "</td>";
                echo "<td>". $row["telefono"] . "</td>";
                echo "<td>". $row["correo"] . "</td>";
                echo "<td>". $row["calle"] . "</td>";
                echo "<td>". $row["colonia"] . "</td>";
                echo "<td>". $row["codigoPostal"] . "</td>";
                echo "<td>". $row["fechaNacimiento"] . "</td>";
            echo "</tr>";              
        }
        echo "</table>";
    } else {
        printf('No record found.<br />');
    }
    mysqli_free_result($result);
    mysqli_close($enlace);
?>