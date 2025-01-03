<?php 
print_r($_GET);
if (!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and 
    !empty($_POST["apellido"]) and 
    !empty($_POST["fecha"]) and
    !empty($_POST["direccion"]) and  
    !empty($_POST["correo"])){
        echo "TODO OK";
        $_nombre=$_POST["nombre"];
        $_apellido=$_POST["apellido"];
        $_fecha=$_POST["fecha"];
        $_direccion=$_POST["direccion"];
        $_correo=$_POST["correo"];
        $sql=$conexion->query("update paciente set Nombre= '$_nombre',Apellido='$_apellido',Fecha_Nacimiento='$_fecha',direccion='$_direccion',Correo_Electronico='$_correo' where ID_Paciente=".$_GET['id']);
        if ($sql==1){  
            echo '<div class="alert alert-success">persona actualizada correctamente </div>';
           header("location:index.php");

        } else {
            echo '<div class="alert alert-danger">error al actualizar persona </div>';
    } 
 } else {
        echo '<div class="alert alert-warning">alguno de los campos esta vacio</div>';
     }
   
}
?>
