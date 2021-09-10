<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$passsword=$_POST['password'];


$sql="INSERT INTO empleado VALUES('$id_empleado','$passsword')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>