<?php 

if (!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and 
    !empty($_POST["apellido"]) and 
    !empty($_POST["dni"]) and 
    !empty($_POST["fecha"]) and 
   !empty($_POST["direccion"]) and 
    !empty($_POST["correo"])){
        echo "TODO OK";
        $_nombre=$_POST["nombre"];
        $_apellido=$_POST["apellido"];
        $_dni=$_POST["dni"];
        $_fecha=$_POST["fecha"];
        $_direccion=$_POST["direccion"];
        $_correo=$_POST["correo"];

        $sql=$conexion->query("insert into paciente (Nombre,Apellido,ID_Paciente,Fecha_Nacimiento,direccion,Correo_Electronico) values ('$_nombre', '$_apellido', $_dni, '$_fecha', '$_direccion', '$_correo')");
        if ($sql==1){  
            echo '<div class="alert alert-success">persona registrada correctamente </div>';

        } else {
            echo '<div class="alert alert-danger">error al registrar persona </div>';

    } 
 } else {
        echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
     }
   
}
?>