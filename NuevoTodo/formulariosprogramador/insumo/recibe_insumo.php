<?php 


//USUARIO
$cod_insumo1 = $_POST["cod_insumo"]; 
$nombre_insumo1 = $_POST["nombre_insumo"];
$cantidad_insumo1 = $_POST["cantidad_insumo"];

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into insumo (cod_insumo, nombre_insumo, cantidad_insumo) values('$cod_insumo1','$nombre_insumo1','$cantidad_insumo1')";
	$result = pg_query($conexion, $sql2);
 

 ?>
<html><body>
<a href="../formularios.html"><h2>Volver a formularios</h2></a>
</body>
</html>