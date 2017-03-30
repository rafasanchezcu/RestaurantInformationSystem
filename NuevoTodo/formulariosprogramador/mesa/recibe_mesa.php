<?php 


//USUARIO
$id_mesa1 = $_POST["id_mesa"]; 
$cantmax_mesas1 = $_POST["cantmax_mesas"];
$ubicacion1 = $_POST["ubicacion"];

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into mesa (id_mesa, cantmax_mesas, ubicacion) values('$id_mesa1','$cantmax_mesas1','$ubicacion1')";
	$result = pg_query($conexion, $sql2);
 

 ?>
<html><body>
<a href="../formularios.html"><h2>Volver a formularios</h2></a>
</body>
</html>