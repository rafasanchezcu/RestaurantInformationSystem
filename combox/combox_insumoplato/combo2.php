<html>
<head>
<title>Llenado de combos desde la bse de  datos</title>
</head>
<body>
<?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from insumo");
$result2 = pg_query("select * from plato");
?>
<!--Creamos el formulario-->
<form action="registrar.php" method="POST"> 
<!--El parametro action es el archivo que procesara el dato y el parametro method es la forma en que enviara el dato en este caso sera por post -->
<h1>Elige una opcion de Insumo</h1>
<select name="combo"> 
<!--Creamos el select con el atributo name "combo" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["cod_insumo"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["nombre_insumo"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$codigo.",".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
<h1>Elige una opcion de Plato</h1>
<select name="combo2"> 
<!--Creamos el select con el atributo name "combo2" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result2)) { 
//Iniciamos un ciclo para recorrer la variable $result2  que tiene la consulta previamente hecha 

$codigo2 = $row["cod_plato"] ; //Asignamos el id del campo que quieras mostrar
$nombre2 = $row["descripcion_plato"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo2.">".$nombre2."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
<input type="submit" value="ENVIAR"/>
 <!--Finalmente creamos el boton que enviara los datos-->
</form>
</body>
</html>