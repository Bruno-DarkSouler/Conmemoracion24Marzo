<?php
    require_once("../php/sistema.php");

    $testimonios = consultaSelect($conexion, "SELECT * FROM testimonios", "", []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/testimonios.css">
    <link rel="stylesheet" href="../css/general.css">
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

    <main>
        <?php
            foreach($testimonios as $testimonio){
                echo "
                <div class=\"testimonio\">
                    <div>
                        <img src=\"../img/". $testimonio["imagen_url"] ."\" alt=\"Persona testimonio\">
                    </div>
                    <div>
                        <h3>". $testimonio["nombre_fuente"] ."</h3>
                        <p class=\"textotestimonio\">
                            ". $testimonio["texto_testimonio"] ."
                        </p>
                    </div>
                        <button></button>
                </div>
                ";
            }
        ?>
    </main>
</body>

<script src="../js/testimonio.js"></script>
<script src="../js/general.js"></script>
</html>