<?php 

//usuario
$rut_usuario = $_POST["rut_usuario"]; 
$nombre_usuario = $_POST["nombre_usuario"];
$direccion_usuario = $_POST["direccion_usuario"];
$telefono_usuario = $_POST["telefono_usuario"];
$tipo_usuario = $_POST["tipo_usuario"];
$fechanac_usuario = $_POST["fechanac_usuario"];
$cedula_usuario = $_POST["cedula_usuario"];
$clave = $_POST["clave"];

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into usuario (rut_usuario, nombre_usuario, direccion_usuario, telefono_usuario, tipo_usuario, fechanac_usuario, cedula_usuario, clave) 
values('$rut_usuario','$nombre_usuario','$direccion_usuario','$telefono_usuario','$tipo_usuario','$fechanac_usuario','$cedula_usuario','$clave')";
	$result = pg_query($conexion, $sql2);
 
?>
<html><body>
<a href="../formularios.html"><h2>Volver a formularios</h2></a>
</body>
</html>