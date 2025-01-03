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
    <h1 class="text-center p-3"> base de datos</h1>
    <div class="container-fluid row">
        <form class= "col-4 p-3" method="POST" action="" >
            <h3 class="text-center text-secondary">Registro de personas</h3>
           <div class="mb-3">
           <?php 
           include "modelo/conexion.php";
             include "controlador/registro_persona.php";
           ?>
               <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
               <input type="text" class="form-control" name="nombre" >
            
           </div>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">apellido de la persona</label>
               <input type="text" class="form-control" name="apellido" >
           </div>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
               <input type="text" class="form-control" name="dni" >
           </div>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">fecha de nacimiento</label>
               <input type="date" class="form-control" name="fecha" >
           </div>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Direccion</label>
               <input type="text" class="form-control" name="fecha" > 
           </div>
           <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">correo</label>
               <input type="email" class="form-control" name="correo" >
           </div>
           <button type="submit" class="btn btn-primary" name="btnregistrar" value= "ok">Registrar</button>
        </form> 
        <div class="col-8 p-4">
           <table class="table">
                <thead class="bg-info">
                    <tr>
                       <th scope="col">DNI</th>
                       <th scope="col">NOMBRES</th>
                       <th scope="col">APELLIDOS</th>
                       <th scope="col">FECHA DE NACIMIENTO</th>
                       <th scope="col">DIRECCION</th>
                       <th scope="col">CORREO</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
               
                $sql=$conexion->query("select * from paciente");
              
                if($sql){

              
                while($datos=$sql->fetch_object()){ ?>
                    <tr>
                       <td><?= $datos->ID_Paciente?></td>
                       <td><?= $datos->Nombre?></td>
                       <td><?= $datos->Apellido?></td>
                       <td><?= $datos->Fecha_Nacimiento?></td>
                       <td><?= $datos->Direccion?></td>
                       <td><?= $datos->Correo_Electronico?></td>
                       <td>
                           <a href="modificar.php?id=<?=$datos->ID_Paciente?>" class="btn btn-small btn-werning"><i class="fa-solid fa-pen-to-square"></i></a>
                           <a href="controlador/eliminar.php?id=<?=$datos->ID_Paciente?>"class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                       </td>
                    </tr>
                <?php }
                  }
                ?>

               </tbody>
           </table>
        </div>  
    </div>
    <!-- javaScript bunble with popper-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>