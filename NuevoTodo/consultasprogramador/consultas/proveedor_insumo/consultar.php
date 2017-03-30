
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
   include("libreria.php");
     $titulo="FornRestaurant CLIENTE"; 
	 hacer_encabezado($titulo);
  
    $sql1="select rut_proveedor,cod_insumo,precio_insumo from proveedor_insumo";
    $result = pg_query($conn,$sql1);
 
?>	<html><head>						
<link href="../tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
 </head> <body> 
   <TABLE BORDER=1> 
      <TR><Th>&nbsp;RUT Proveedor </Th><Th>&nbsp;Codigo Insumo &nbsp;</Th><Th>&nbsp;Precio Insumo &nbsp;</Th></TR> 
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$var1=$row1["0"];
											$var2=$row1["1"];
                                                                                        $var3=$row1["2"];                                                                                   										
											
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
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conn); 
?> 
</table> 
</body> 
</html> 

