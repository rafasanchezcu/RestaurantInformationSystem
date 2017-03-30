
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
   include("libreria.php");
     $titulo="FornRestaurant CLIENTE"; 
	 hacer_encabezado($titulo);
  
    $sql1="select rut_personal,nombre_personal,telefono_personal,direccion_personal,cod_tipo,cod_turno from personal_1";
    $result = pg_query($conn,$sql1);
 
?>	<html><head>						
<link href="../tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
 </head> <body> 
   <TABLE BORDER=1> 
      <TR><Th>&nbsp;RUT Personal </Th><Th>&nbsp;Nombre Personal&nbsp;</Th><Th>&nbsp;Telefono Personal </Th><Th>&nbsp;Dirección Personal </Th><Th>&nbsp;Codigo Personal </Th><Th>&nbsp;Codigo Turno </Th></TR> 
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$var1=$row1["0"];
											$var2=$row1["1"];
                                                                                        $var3=$row1["2"];
                                                                                        $var4=$row1["3"];
                                                                                        $var5=$row1["4"];
                                                                                        $var6=$row1["5"];
											
											
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
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conn); 
?> 
</table> 
</body> 
</html> 

