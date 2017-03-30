<?php 

//usuario
$rut_proveedor1 = $_POST["rut_proveedor"]; 
$nombre_proveedor1 = $_POST["nombre_proveedor"];
$direccion_proveedor1 = $_POST["direccion_proveedor"];
$telefono_proveedor1 = $_POST["telefono_proveedor"];
$mail_proveedor1 = $_POST["mail_proveedor"];

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into proveedor (rut_proveedor, nombre_proveedor, direccion_proveedor, telefono_proveedor, mail_proveedor) values('$rut_proveedor1','$nombre_proveedor1','direccion_proveedor1','$telefono_proveedor1','$mail_proveedor1')";
	$result = pg_query($conexion, $sql2);



 ?>
<html><body>
<a href="../formularios.html"><h2>Volver a formularios</h2></a>
</body>
</html>