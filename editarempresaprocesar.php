<?php

include_once("conexion.php");
$con = conexion();

try {

    $sql = "UPDATE empresas SET NombreEmpresa = :nomEmpresa, Gerente = :gerente, Telefono = :telefono, PaginaWEB = :pagWeb, Comentarios = :coment WHERE RTN = :rtn";

    $parametros = [
        "nomEmpresa" => $_POST["nombreEmpresa"],
        "gerente" => $_POST["gerente"],
        "telefono" => $_POST["telefono"],
        "pagWeb" => $_POST["paginaWeb"],
        "coment" => $_POST["comentarios"],
        "rtn" => $_POST["rtn"]
    ];

    $stm = $con -> prepare($sql);

    $stm -> execute($parametros);

    $con = null;

    header("Location: index.php");

} catch (Exception $ex) {
    echo $ex.message;
}

?>