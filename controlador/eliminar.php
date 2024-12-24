<?php 

include "../modelo/conexion.php";
print_r($_GET);

if( !empty($_GET["id"])){

    $sql=$conexion->query("delete from paciente where ID_Paciente=".$_GET["id"]);
    if ($sql==1){  
        header("location:../index.php");
    }

}