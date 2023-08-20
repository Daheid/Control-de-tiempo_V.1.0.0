<?php
    include("bbdd/conexion.php");

    $id = 0;

    mysqli_query($conexion, "DELETE FROM usuarios WHERE id = $id");
    mysqli_close($conexion);

    if($conexion){
        echo "
        <script>
            alert('se ha registado el usuario con exito');
            window.location='tabla.php'
        </script>
        ";
    };
?>