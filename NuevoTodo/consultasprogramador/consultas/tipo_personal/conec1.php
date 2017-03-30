<?PHP

function conectarse() 
{ 
  $conn=pg_connect("host=localhost user=postgres port=5432 dbname=arestaurante password=123456");
     $stat = pg_connection_status ($conn);
if ($stat===0)
{
echo "hola1";
}
else 
{
echo "hola2";
}
  return $conn; 
  }
?>
