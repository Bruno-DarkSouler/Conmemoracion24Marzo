<?php
    require_once("../php/sistema.php");

    $recursos = consultaSelect($conexion, "SELECT * FROM fotos", "", []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <title>Document</title>
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

    <div id="filtro_negro" class="ausente"></div>

    <div id="boton_audio" class="silenciado">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
            <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2"/>
            <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"/>
            <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z"/>
        </svg>
    </div>

    <header>
        <h1>Galería de imágenes</h1>
    </header>
    <div id="galeria" class="">
        <?php
            foreach($recursos as $recurso){
                echo "
                <div class=\"elemento_galeria\">
                    <div class=\"contenedor_imagen\">
                        <img src=\"". $recurso["imagen_url"] ."\" alt=\"Imagen galeria\">
                    </div>
                    <div class=\"contenedor_etiqueta\">
                        <span>". $recurso["titulo"] ."</span>
                    </div>
                </div>
                ";
            }
        ?>
        <!-- <div class="elemento_galeria">
            <div class="contenedor_imagen">
                <img src="../img/collage.jpg" alt="Imagen galeria">
            </div>
            <div class="contenedor_etiqueta">
                <span>Descripcion imagen</span>
            </div>
        </div>
        <div class="elemento_galeria">
            <div class="contenedor_imagen">
                <img src="../img/imagen_prueba.jpg" alt="Imagen galeria">
            </div>
            <div class="contenedor_etiqueta">
                <span>Descripcion imagen</span>
            </div>
        </div>
        <div class="elemento_galeria">
            <div class="contenedor_imagen">
                <img src="../img/collage.jpg" alt="Imagen galeria">
            </div>
            <div class="contenedor_etiqueta">
                <span>Descripcion imagen</span>
            </div>
        </div>
        <div class="elemento_galeria">
            <div class="contenedor_imagen">
                <img src="../img/imagen_prueba.jpg" alt="Imagen galeria">
            </div>
            <div class="contenedor_etiqueta">
                <span>Descripcion imagen</span>
            </div>
        </div> -->
    </div>
    <div id="contenedor_video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XILQViWtgwM?si=6wV0pjuWzVWR5CR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</body>

<audio controls loop id="musica">
    <source src="../audio/Solo a Mi Pueblo (From La Republica Perdida).mp3" type="audio/mpeg">
</audio>

<script src="../js/general.js"></script>
<script src="../js/galeria.js"></script>

</html>