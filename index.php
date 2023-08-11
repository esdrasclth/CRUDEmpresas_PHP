<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>CRUD Empresas - Esdras Clother - 202010010048</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>

</head>
<body>

<section class="hero is-primary">
  <div class="hero-body">
    <h2 class="title">
      CRUD DE REGISTRO DE EMPRESAS
    </h2>
    <p class="subtitle">
      Esdras Abiel Clother Paz - 202010010048 <br>
      Universidad Tecnologica de Honduras
    </p>
  </div>
</section>

<div class="container is-fullhd">

    <div class="tile py-4">
    <h2>Tabla de registro, añade nuevos datos usando el boton de "agregar nueva empresa", puedes editar y borrar registro utilizando las acciones.</h2>
    </div>

    <a href="agregarempresa.php" ><button class="button py-4 is-primary">Agregar Nueva Empresa</button></a> 

    <table border="1" class="table mt-4 is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr ">
                <th>RTN</th>
                <th>Nombre de la Empresa</th>
                <th>Gerente</th>
                <th>Telefono</th>
                <th>Pagina WEB</th>
                <th>Comentarios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>

        <?php
        include_once("conexion.php");
        $con = conexion();

        try{

            $sql = "SELECT RTN, NombreEmpresa, Gerente, Telefono, PaginaWEB, Comentarios FROM empresas";

            $stm = $con -> query($sql);

            $fila = $stm -> fetch();

            while($fila){
                echo "<tr>";
                echo "<td>".$fila[RTN]."</td>";
                echo "<td>".$fila[NombreEmpresa]."</td>";
                echo "<td>".$fila[Gerente]."</td>";
                echo "<td>".$fila[Telefono]."</td>";
                echo "<td>".$fila[PaginaWEB]."</td>";
                echo "<td>".$fila[Comentarios]."</td>";
                echo "<td>
                <a href='editarempresa.php?RTN=".$fila[RTN]."'><button class='button is-dark mb-1' style='width:100%; height:30px'>Editar</button></a> 
                <a href='eliminarempresa.php?RTN=".$fila[RTN]."'><button class='button is-danger' style='width:100%; height:30px'>Borrar</button></a> </td>";
                echo "</tr>";

                $fila = $stm -> fetch();
            }

        } catch(Exception $ex){
            echo $ex.message;
        }

        ?>

        </tbody>

        </div>

        
</body>
</html>