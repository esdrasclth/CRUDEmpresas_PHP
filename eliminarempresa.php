<?php   
    
    include_once("conexion.php");

    $con = conexion();

    try {

        $sql = "DELETE FROM empresas WHERE RTN = :rtn";

        $parametros = [
            "rtn" => $_GET["RTN"]
        ];

        $stm = $con -> prepare($sql);

        $stm->execute($parametros);

        $con = null;

        header("Location: index.php");

    } catch (Exception $ex) {
        echo $ex.message;
    }

    ?>