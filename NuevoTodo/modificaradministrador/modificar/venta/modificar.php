<?PHP
// Activar errores
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);

 extract($_POST);
 include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 

 

$sql1= "UPDATE venta SET  iva='".$iva."',total='".$total."',fecha_pedido='".$fecha."' where id_venta='".$id_venta."'";
 $result1 = pg_query($conn,$sql1);
	
	
if($result1== false) 
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> MODIFICAR - VENTA </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='venta2.html' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS NO SE PUDIERON MODIFICAR CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
else
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> MODIFICAR - VENTA </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='venta2.html' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS SE MODIFICARON CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
?>