<?php

include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$password=$_POST['password'];

$sql="UPDATE empleado SET id_empleado ='$id_empleado', password ='$password'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>