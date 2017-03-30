<?php 

//usuario
$venta = $_POST["id_venta"]; 
$iva = $_POST["iva"];
$total = $_POST["total"];
$fecha = $_POST["fecha_pedido"];
$pedido = $_POST["id_pedido"];


$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into venta (id_venta,iva,total,fecha_pedido,id_pedido) values('$venta','$iva','$total','$fecha','$pedido')";
	$result = pg_query($conexion, $sql2);

 
 
?>
<html><body>
<a href="../formularios.html"><h2>Volver a formularios</h2></a>
</body>
</html>