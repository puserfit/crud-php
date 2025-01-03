<?php
 include "modelo/conexion.php";
if( !empty($_GET["id"])){


    $sql=$conexion->query("select * from paciente where ID_Paciente =". $_GET['id']);
   $paciente=$sql->fetch_object();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php ymysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid row">
    <form class="col-4 p-3" method="POST" action="">
        <h3 class="text-center text-secondary">editar de paciente</h3>
        <div class="mb-3">
            <?php
            include "modelo/conexion.php";
            include "controlador/editar.php";
            ?>
            <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
            <input type="text" class="form-control" name="nombre"value="<?=$paciente->Nombre?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">apellido de la persona</label>
            <input type="text" class="form-control" name="apellido"value="<?=$paciente->Apellido?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha"  value="<?=$paciente->Fecha_Nacimiento?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="date" class="form-control" name="fecha"  value="<?=$paciente->Direccion?>">
        </div> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">correo</label>
            <input type="email" class="form-control" name="correo" value="<?=$paciente->Correo_Electronico?>">
        </div>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">guardar</button>
    </form>
    <?php } ?>