<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $rut_proveedor;
		$sql1="Select* from proveedor_insumo where rut_proveedor='".$rut_proveedor."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PROVEEDOR-INSUMO </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DEL CLIENTE SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "RUT PROVEEDOR";
							echo "</th>";
							echo "<th>";
							echo "CODIGO INSUMO";
							echo "</th>";
							echo "<th>";
							echo "PRECIO";
							echo "</th>";
							
							
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$rut_proveedor=$row1["rut_proveedor"];
											$cod_insumo=$row1["cod_insumo"];
                                            $precio=$row1["precio_insumo"];
                                            
											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="rut_proveedor"  disabled="disabled"  value=<?PHP echo $rut_proveedor;?>>
											</td>
											<td >
											<input  type="text"  name="codigoinsumo"  disabled="disabled" value=<?PHP echo $cod_insumo;?>>
											</td>
											<td >
											<input  type="text"  name="precioinsumo"  value=<?PHP echo $precio;?>>
											</td>
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="rut_proveedor" value=<?PHP echo $rut_proveedor;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $rut_proveedor;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='provedorinsumo2' METHOD='POST'>";
								echo "<td align='center' >";
								echo "<INPUT TYPE='submit' VALUE='Retornar'/>";
								echo "</td>";
								echo "</tr>";
								echo "</table>";
								echo "</FORM>";	
								echo "</BODY>";
								echo "</html>";
								}
					else 
					{
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PROVEEDOR-INSUMO </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='provedorinsumo2' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE ESTUDIANTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>