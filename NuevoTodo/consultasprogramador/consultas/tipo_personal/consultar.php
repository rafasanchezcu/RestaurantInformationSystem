
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
   include("libreria.php");
     $titulo="FornRestaurant CLIENTE"; 
	 hacer_encabezado($titulo);
  
    $sql1="select cod_tipo,descripcion from tipo_personal";
    $result = pg_query($conn,$sql1);
 
?>	<html><head>						
<link href="../tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../tablecloth/tablecloth.js"></script>
 </head> <body> 
   <TABLE BORDER=1> 
      <TR><Th>&nbsp;Codigo Tipo </Th><Th>&nbsp;Descripción(Cargo)&nbsp;</Th></TR> 
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$var1=$row1["0"];
											$var2=$row1["1"];
                                                                                                                                                                             										
											
											echo "<tr>";
											echo "<td >";
											echo $var1;
											echo "</td>";
											echo "<td >";
											echo $var2;
											echo "</td>";																						
											echo "</tr>";	 
							}   
  pg_free_result($result); 
  pg_close($conn); 
?> 
</table> 
</body> 
</html> 

