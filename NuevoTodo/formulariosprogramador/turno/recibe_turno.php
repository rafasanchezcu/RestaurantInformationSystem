<?php 

//usuario
$cod_turno1 = $_POST["cod_turno"]; 
$descripcion1 = $_POST["descripcion"];

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into turno (cod_turno, descripcion) values('$cod_turno1','$descripcion1')";
	$result = pg_query($conexion, $sql2);

 
 ?>
<html><body>
<a href="../formularios.html"><h2>Volver a formularios</h2></a>
</body>
</html>