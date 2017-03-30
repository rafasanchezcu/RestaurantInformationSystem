
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
   include("libreria.php");
     $titulo="FornRestaurant CLIENTE"; 
	 hacer_encabezado($titulo);
  
    $sql1="select rut_usuario,nombre_usuario,direccion_usuario,telefono_usuario,tipo_usuario,fechanac_usuario,cedula_usuario,clave from usuario";
    $result = pg_query($conn,$sql1);
 
?>	<html><head>						
<link href="../tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
 </head> <body> 
   <TABLE BORDER=1> 
      <TR><Th>&nbsp;RUT Usuario </Th><Th>&nbsp;Nombre Usuario&nbsp;</Th><Th>&nbsp;Dirección Usuario </Th><Th>&nbsp;Telefono Usuario </Th><Th>&nbsp;Tipo De Usuario </Th><Th>&nbsp;Fecha De Nacimiento </Th><Th>&nbsp;Cedula Usuario</Th><Th>&nbsp;Clave </Th></TR> 
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$var1=$row1["0"];
											$var2=$row1["1"];
                                                                                        $var3=$row1["2"];
                                                                                        $var4=$row1["3"];
                                                                                        $var5=$row1["4"];
                                                                                        $var6=$row1["5"];
                                                                                        $var7=$row1["6"];
                                                                                        $var8=$row1["7"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $var1;
											echo "</td>";
											echo "<td >";
											echo $var2;
											echo "</td>";
											echo "<td >";
											echo $var3;
											echo "</td>";
											echo "<td >";
											echo $var4;
											echo "</td>";
											echo "<td >";
											echo $var5;
											echo "</td>";
											echo "<td >";
											echo $var6;
											echo "</td>";
                                                                                        echo "<td >";
											echo $var7;
											echo "</td>";
                                                                                        echo "<td >";
											echo $var8;
											echo "</td>";
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conn); 
?> 
</table> 
</body> 
</html> 

