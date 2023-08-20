<?php
    include("conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cedula = $_POST["cedula"];
    $telefono= $_POST["telefono"];
    $email= $_POST["email"];
    $genero= $_POST["genero"];
    $edad= $_POST["edad"];
    $hora= $_POST["hora"];
    $fecha= $_POST["fecha"];
    $observacion= $_POST["observacion"];

    $insertar = "INSERT INTO usuarios (nombre, apellido, cedula, telefono, email, genero, edad, hora, fecha, observacion) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$email', '$genero', '$edad', '$hora', '$fecha', '$observacion')";

    $resultado = mysqli_query($conexion, $insertar);

    if($resultado){
        echo "
        <script>
            alert('se ha registado el usuario con exito');
            window.location='../datos.php'
        </script>
        ";
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-500BUHEmvpQ+11W4y57PTFmhCaXp0ML5d60M1M7uH2+nquivzIebhndo] K28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css" />
<title>Control de PC</title>
</head>
<body>
<header>
    <div class="Logo">
        <img class="logo" src="../Logo.png" alt="Logo">
    </div>
    <h1 class="logo-nombre">Biblioteca Virtual de Aragua</h1>
    <div class="redes-container">
        <ul>
            <li><a href="https://www.facebook.com/SoyBVA" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/soybva_/" class="instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/SoyBva" class="twitter"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</header>

<a href="index.php">Cronometro</a>
<a href="tabla.php">Tabla de Datos</a>

<center>
<!-- Encabezado de la tabla -->
<h1>Tabla de registro diario</h1>
<form class="form" action="bbdd/formulario.php" name="" method="post">
    <div class="flex"></div>  
        <label for="name_user">Ingrese su Nombre</label>
        <input class="input123" type="text" placeholder="Escribe tu Nombre" name="nombre" id="name_user">

        <label for="lastname_user">Ingrese su Apellido</label>
        <input class="input123" type="text" placeholder="Escribe tu Apellido" name="apellido" id="lastname_user">

        <label for="cedula_user">Ingrese su Cedula</label>
        <input class="input123" type="text" placeholder="Escribe tu Cedula" name="cedula" id="cedula_user">

        <label for="tlf_number">Ingrese su numero telefonico</label>
        <input class="input123" type="text" placeholder="Ej: 0412-5555555" name="telefono" id="tlf_number">

        <label for="email">Ingrese correo electronico</label>
        <input class="input123" type="email" placeholder="Ej: Support@gmail.com" name="email" id="email">

        <label for="email">Ingrese el Genero</label>
        <input class="input123" type="text" placeholder="Ej: femenino o masculino" name="genero" id="genero">

        <label for="email">Ingrese la Edad</label>
        <input class="input123" type="text" placeholder="Ej: 20" name="edad" id="edad">

        <label for="hora">Hora</label>
        <input class="input123" type="time" name="hora" id="hora-sistema" readonly>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" readonly>

        <label for="observaciones">Observaciones</label>
        <input class="input1234" type="text" name="observacion" id="observaciones">
    
        <button class="beautiful-button" type="submit">Registrar</button>

        <button class="reset-button" type="reset">Limpiar</button>
    </form>
</center>
<footer>
    <img class="logo" src="../Logo.png" alt="logo">
    <h5>AV. SUCRE. EDIF. BIBLIOTECA VIRTUAL. N°26 PISO PB. LOCAL S/N URB. SAN ISIDRO. MARACAY EDO. ARAGUA - VENEZUELA</h5>
    <div class="redes-container">
        <ul>
            <li><a href="https://www.facebook.com/SoyBVA" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/soybva_/" class="instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/SoyBva" class="twitter"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
</footer>
    <script src="../scripts.js"></script> 
</body>
</html>