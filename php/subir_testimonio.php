<?php
    require_once("./sistema.php");

    $nombre = $_POST["nombre"];
    $testimonio = $_POST["testimonio"];
    $imagen = SubirArchivo("../", true);

    $resultado = consultaInsert($conexion, "INSERT INTO `testimonios`(`nombre_fuente`, `texto_testimonio`, imagen_url) VALUES (?, ?, ?)", "sss", [$nombre, $testimonio, $imagen]);

    header("Location:../html/formulario.html")
?>