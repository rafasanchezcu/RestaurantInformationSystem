<?PHP
 extract($_POST);
 include("conec.php"); 
 $conn=conectarse(); 
  

 $sql1= "DELETE FROM proveedor_insumo WHERE rut_proveedor='".$rut2."'";
	$result1 = pg_query($conn,$sql1);
	//$numrows5 = pg_numrows($result1);
	
if($result1== false) 
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> ELIMNINAR PROVEEDOR INSUMO</TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='pinsumo1.html' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS NO SE PUDIERON ELIMINAR CORECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
else
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> ELIMINAR PROVEEDOR INSUMO </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='pinsumo1.html' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS SE ELIMINARON CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
?>