<?php

function conexion(){

    try {
        $cadenConexion = "mysql:host=sql211.infinityfree.com;dbname=if0_34722935_CRUDEmpresasProjects";
        $usuario = "if0_34722935";
        $clave = "aiqRN3NeHBGd1R";

        $conexion = new PDO($cadenConexion, $usuario, $clave);

        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;
    } catch(Exception $ex){
        echo $ex.message;

        return null;
    }

}

?>