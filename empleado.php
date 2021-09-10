<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
    ?>
    
<!DOCTYPE html>
<html lang="en">
    <heade>
            <title> JAKUS</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/style.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        </head>
    <body>
            <div class="container mt-5">
                <div class="row">
                     
                <div class="col-md-3">
                   <h1>Ingrese Datos</h1>
                   <form action="insertar.php" method="POST">
                       <input type="text" class="form-control mb3" name="id_empleado" placeholder="id_empleado">
                       <input type="text" class="form-control mb3" name="password" placeholder="password">
                       
                       <input type="submit" class="btn btn-primary">
                    </from>
                </div>
                
                <div class="col md-8">
                  <table class="table">
                      <thead class="table-success table-striped" >
                           <tr>
                               <th>id_empleado</th>
                               <th>password</th>
                               <th></th>
                               <th></th>
                            </tr>
                       </thead> 
                    
                       <tbody>
                            <?php
                                while($row= mysqli_fetch_array($query)){
                            ?>
                             <tr>
                                 <th><?php echo $row['id_empleado']?></th>
                                 <th><?php echo $row['password']?></th>
                                 <th><a href="actualizar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-info">Editar contraseña</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-danger">Eliminar</a></th> 
                             </tr>
                            <?php
                                }   
                            ?>  
                         </tbody>
                 </table>
 
                </div>
  
                </div> 
            </body>      
        </doby> 
</html>      