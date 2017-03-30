
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
   include("libreria.php");
     $titulo="FornRestaurant CLIENTE"; 
	 hacer_encabezado($titulo);
  
    $sql1="select cod_insumo,nombre_insumo,cantidad_insumo from insumo";
    $result = pg_query($conn,$sql1);
 
?>
	<html><head>						
<link href="../tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
 </head> <body>  
 <TABLE cellspacing='0' cellpadding='0' align='center'>
      <TR><Th>&nbsp;Codigo Insumo </Th><Th>&nbsp;Nombre Insumo&nbsp;</Th><Th>&nbsp;Cantidad Insumo </Th></TR> 
	  
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

