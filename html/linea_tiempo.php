<?php
    require_once("../php/sistema.php");

    $eventos = consultaSelect($conexion, "SELECT *, YEAR(fecha) AS anio FROM `eventos` ORDER BY fecha ASC;", "", []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/linea_tiempo.css">
    <title>Linea de tiempo</title>
</head>
<body>

    <div id="menu_desplegable">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
    </div>

    <div id="cuerpo_menu" class="cerrado">
        <div id="cabecera_menu">
            <span>Contenido</span>
            <div id="boton_cerrar">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </div>
        </div>
        <div>
            <ul id="lista_navegacion">
                <li>
                    <a href="../index.html">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="./linea_tiempo.php">
                        Eventos
                    </a>
                </li>
                <li>
                    <a href="./galeria.php">
                        Galeria
                    </a>
                </li>
                <li>
                    <a href="./testimonios.php">
                        Testimonios
                    </a>
                </li>
                <li>
                    <a href="./formulario.html">
                        Formulario
                    </a>
                </li>
                <li>
                    <a href="./acercade.html">
                        Acerca de este sitio
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="contenedor_linea">

        <div class="flecha" id="flecha_izquierda">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
            </svg>
        </div>

        <div class="flecha" id="flecha_derecha">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
        </div>

        <div id="linea"></div>

        <div id="filtro_negro" class="ausente"></div>
        <div id="filtro_negro_info" class="ausente"></div>

        <?php
            foreach($eventos as $evento){
                echo "
                <div class=\"evento\">
                    ". $evento["anio"] ."
                </div>
                <div class=\"informacion_evento\">
                    <h2>". $evento["titulo"] ."</h2>
                    <div class=\"contenedor_imagen_evento\">
                        <img src=\"". $evento["imagen_url"] ."\" alt=\"\">
                    </div>
                    <p>". $evento["descripcion"] ."</p>
                </div>
                ";
            }
        ?>

    </div>
</body>
<script src="../js/linea_tiempo.js"></script>
<script src="../js/general.js"></script>
</html>