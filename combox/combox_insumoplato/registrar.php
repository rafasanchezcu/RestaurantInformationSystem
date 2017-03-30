<?PHP
$codigo = $_POST["combo"];
$codigo2 = $_POST["combo2"];
echo $codigo; 
echo $codigo2; 

$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456"); 
$sql2="insert into insumo_plato(cod_insumo,cod_plato) values('$codigo','$codigo2')";
$result = pg_query($conexion, $sql2);			
?>