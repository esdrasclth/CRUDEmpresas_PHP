<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Editar Empresa - Esdras Clother - 202010010048</title>
</head>
<body>

    <section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
        CRUD DE REGISTRO DE EMPRESAS
        </p>
        <p class="subtitle">
            Esdras Abiel Clother Paz - 202010010048 <br>
            Universidad Tecnologica de Honduras
        </p>
    </div>
    </section>

    <div class="container is-fullhd">

    <div class="tile py-4">
        <h2>Actualiza la informacion de las empresas editando los campos correspondientes.</h2>
    </div>

    <?php   
    
    include_once("conexion.php");

    $con = conexion();

    try {

        $sql = "SELECT NombreEmpresa, Gerente, Telefono, PaginaWEB, Comentarios FROM empresas WHERE RTN = :rtn";

        $parametros = [
            "rtn" => $_GET["RTN"]
        ];

        $stm = $con -> prepare($sql);

        $stm->execute($parametros);

        $fila = $stm -> fetch();

        $con = null;

    } catch (Exception $ex) {

    }

    ?>

    <a href="index.php"><button class="button mb-4 is-dark">Regresar atras</button></a>

    <form method="POST" action="editarempresaprocesar.php" class="box">

    <div class="field">
        <label for="rtn" class="label">RTN</label>
        <div class="control">
            <input class="input" type="text" id="rtn" name="rtn" maxlength="15" required value="<?php echo $_GET["RTN"]; ?>">
        </div>
    </div>

    <div class="field">
        <label for="nombreEmpresa" class="label">Nombre de la Empresa</label>
        <div class="control">
            <input class="input" type="text" id="nombreEmpresa" name="nombreEmpresa" maxlength="150" required value="<?php echo $fila["NombreEmpresa"]; ?>">
        </div>
    </div>

    <div class="field">
        <label for="gerente" class="label">Gerente</label>
        <div class="control">
            <input class="input" type="text" id="gerente" name="gerente"  maxlength="150" required value="<?php echo $fila["Gerente"]; ?>">
        </div>
    </div>

    <div class="field">
        <label for="telefono" class="label">Telefono</label>
        <div class="control">
            <input class="input" type="telefono" id="telefono" name="telefono" maxlength="30" required value="<?php echo $fila["Telefono"]; ?>">
        </div>
    </div>

    <div class="field">
        <label for="paginaWeb" class="label">Pagina Web</label>
        <div class="control">
            <input class="input" type="paginaWeb" id="paginaWeb" name="paginaWeb" maxlength="250" value="<?php echo $fila["PaginaWEB"]; ?>">
        </div>
    </div>

    <div class="field">
        <label for="comentarios" class="label">Comentarios</label>
        <div class="control">
        <textarea class="textarea" name="comentarios" id="comentarios" cols="60" rows="3"><?php echo $fila["Comentarios"]; ?></textarea>
        </div>
    </div>

    <button class="button py-4 is-primary "  type="submit">Guardar Cambios</button>
    </form>

    </div>
</body>
</html>