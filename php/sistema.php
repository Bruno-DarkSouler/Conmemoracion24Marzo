<?php
    // Configuración de la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base_datos = "mvj";

    // Crear conexión
    $conexion = new mysqli($servidor, $usuario, $password, $base_datos);

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Configurar charset para caracteres especiales
    $conexion->set_charset("utf8");

    // Función para cerrar la conexión
    function cerrarConexion($conexion) {
        $conexion->close();
    }
    
    function errorFatalSistemaPHP(){
        echo "Error fatal";
    }

    function consultaSelect(&$conexion, $consulta, $tipo_d, $parametros){
        $cursor = $conexion->prepare($consulta);

        if($tipo_d != ""){
            $cursor->bind_param($tipo_d, ...$parametros);
        }

        $cursor->execute();
        $resultado = $cursor->get_result();

        $lista_resultados = [];

        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                array_push($lista_resultados, $fila);
            }
            return $lista_resultados;
        }else{
            return 1;
        }
    } //Devuelve un array de indices numericos que contien arrays con indices alfanumericos, siendo cada uno de estos un registro de la base de datos y los indices alfanumericos las columnas de la base de datos

    function consultaInsert(&$conexion, $consulta, $tipo_d, $parametros){
        $cursor = $conexion->prepare($consulta);
        if($tipo_d != ""){
            $cursor->bind_param($tipo_d, ...$parametros);
        }

        $cursor->execute();

        if(!$conexion->commit()){
            return $conexion->connect_error;
            $conexion->rollback();
            errorFatalSistemaPHP();
        }
    }
     
?>