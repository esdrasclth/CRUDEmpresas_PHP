<?php

include_once("conexion.php");
$con = conexion();

try {

    $sql = "INSERT INTO empresas(RTN, NombreEmpresa, Gerente, Telefono, PaginaWEB, Comentarios) VALUES (:rtn, :nomEmpresa, :gerente, :telefono, :pagWeb, :coment)";

    $parametros = [
        "rtn" => $_POST["rtn"],
        "nomEmpresa" => $_POST["nombreEmpresa"],
        "gerente" => $_POST["gerente"],
        "telefono" => $_POST["telefono"],
        "pagWeb" => $_POST["paginaWeb"],
        "coment" => $_POST["comentarios"]
    ];

    $stm = $con -> prepare($sql);

    $stm -> execute($parametros);

    $con = null;

    header("Location: index.php");

} catch (Exception $ex) {
    echo $ex.message;
}

?>