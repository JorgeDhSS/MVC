<?php 
    $enlace = mysqli_connect("127.0.0.1", "root", "root", "mvc");
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    printf("----------------DATOS RECIBIDOS----------------");
    echo "Nombre: ".$_POST["nombre"];
    echo "Apellido paterno: ".$_POST["apellidoP"];
    echo "Apellido materno: ".$_POST["apellidoM"];
    echo "Teléfono: ".$_POST["telefono"];
    echo "Correo: ".$_POST["email"];
    echo "Calle: ".$_POST["calle"];
    echo "Colonia: ".$_POST["colonia"];
    echo "Código postal: ".$_POST["cp"];
    echo "Fecha de nacimiento: ".$_POST["fechaN"];

    
    /* Prepare an insert statement */
    $stmt = $enlace->prepare("INSERT INTO usuarios (matricula, nombre, apellidoP, apellidoM, telefono, correo, calle, colonia, codigoPostal, fechaNacimiento) VALUES (?,?,?,?,?,?,?,?,?,?)");

    /* Bind variables to parameters */
    $stmt->bind_param("isssisssis", $val1, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10);

    $val1 = !empty($_POST["matricula"]) ? $_POST["matricula"] : "";
    $val2 = !empty($_POST["nombre"]) ? $_POST["nombre"] : "";
    $val3 = !empty($_POST["apellidoP"]) ? $_POST["apellidoP"] : "";
    $val4 = !empty($_POST["apellidoM"]) ? $_POST["apellidoM"] : "";
    $val5 = !empty($_POST["telefono"]) ? $_POST["telefono"] : "";
    $val6 = !empty($_POST["email"]) ? $_POST["email"] : "";
    $val7 = !empty($_POST["calle"]) ? $_POST["calle"] : "";
    $val8 = !empty($_POST["colonia"]) ? $_POST["colonia"] : "";
    $val9 = !empty($_POST["cp"]) ? $_POST["cp"] : "";
    $val10 = !empty($_POST["fechaN"]) ? date("Y-m-d", $_POST["fechaN"]) : "1970-01-01";

    /* Execute the statement */
    if($stmt->execute())
    {
        for ($i = 0; $i < 50000000; ++$i)
        {
            echo "";
        }
        session_start();
        $_SESSION['matricula']  = $_POST["matricula"];
        header('Location: main-email.html');
    }
    else
    {
        printf("Error: %d.\n", $stmt->errno);
    }
?>