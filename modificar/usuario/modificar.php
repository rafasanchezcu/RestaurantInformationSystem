<?PHP
// Activar errores
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);

 extract($_POST);
 include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
 echo $rut_usuario;
 echo $nombre; 
 echo $direccion;
 

$sql1= "UPDATE usuario SET  nombre_usuario='".$nombre."',direccion_usuario='".$direccion."',telefono_usuario='".$telefono."',tipo_usuario='".$tipo."',fechanac_usuario='".$fecha."',cedula_usuario='".$cedula."',clave='".$clave1."' where rut_usuario='".$rut_usuario."'";
 $result1 = pg_query($conn,$sql1);
	
	
if($result1== false) 
{
	echo "<html>";
	echo "<HEAD>";
	echo "<TITLE> MODIFICAR - ESTUDIANTE </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='cliente2.html' METHOD='POST'>";
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
	echo "<TITLE> MODIFICAR - ESTUDIANTE </TITLE>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<FORM ACTION='cliente2.html' METHOD='POST'>";
	echo "<h1><P align='center'>LOS DATOS SE MODIFICARON CORRECTAMENTE:</p></h1>";
	echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
	echo "</FORM>";	
	echo "</BODY>";
	echo "</html>";
}
?>