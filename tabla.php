<?php
    include('bbdd/conexion.php');
    $usuarios = "SELECT * FROM usuarios";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tabla.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"> //nunca hagan esto por favor   
        function confirmar(){
            return confirm('Asegurese de Generar el reporte primero');
        }y
    </script>
    <link rel="shortcut icon" href="logo.ico" />
    <title>Tabla de datos</title>
</head>

<body>
<header>
    <div class="Logo">
        <img class="logo" src="Logo.png" alt="Logo">
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
    <nav>
        <a href="index.php" class="nav-link">- Cronometro</a>
        <a href="datos.php" class="nav-link">- Registro</a>
        <a href="fpdf/PruebaH.php" class="nav-link" target = "_blank">- Generador de reportes</a>
    </nav>
    <?php
    echo "<a href='eliminar.php' class='beautiful-button'  onclick='return confirmar()'>Vaciar Tabla</a>";
    ?>

    <div class="container-table">
        <div class="table__title">Datos de Usuarios</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Apellido</div>
        <div class="table__header">Cedula</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Genero</div>
        <div class="table__header">Edad</div>
        <div class="table__header">Hora</div>
        <div class="table__header">Fecha</div>
        <div class="table__header">Observacion</div>

        <?php
            $resultado = mysqli_query($conexion, $usuarios);

            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <div class="table__item"><?php echo $row["nombre"]; ?></div>
        <div class="table__item"><?php echo $row["apellido"]; ?></div>
        <div class="table__item"><?php echo $row["cedula"]; ?></div>
        <div class="table__item"><?php echo $row["telefono"]; ?></div>
        <div class="table__item"><?php echo $row["email"]; ?></div>
        <div class="table__item"><?php echo $row["genero"]; ?></div>
        <div class="table__item"><?php echo $row["edad"]; ?></div>
        <div class="table__item"><?php echo $row["hora"]; ?></div>
        <div class="table__item"><?php echo $row["fecha"]; ?></div>
        <div class="table__item"><?php echo $row["observacion"];?></div> 

        <?php
            }
            mysqli_free_result($resultado);
        ?>
    </div>

</body>
</html>