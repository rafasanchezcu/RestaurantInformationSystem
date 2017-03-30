<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $id_venta;
		$sql1="Select* from venta where id_venta='".$id_venta."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DE LA VENTA </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DE LA VENTA SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "ID DE LA VENTA";
							echo "</th>";
							echo "<th>";
							echo "IVA";
							echo "</th>";
							echo "<th>";
							echo "TOTAL";
							echo "</th>";
							echo "<th>";
							echo "FECHA DE PEDIDO";
							echo "</th>";
							echo "<th>";
							echo "ID DEL PEDIDO";
							echo "</th>";
														
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["id_venta"];
											$iva=$row1["iva"];
                                            $total=$row1["total"];
                                            $fecha=$row1["fecha_pedido"];
                                            $pedido=$row1["id_pedido"];
                                            											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $id_venta;?>>
											</td>
											<td >
											<input  type="integer"  name="iva"  value=<?PHP echo $iva;?>>
											</td>
											<td >
											<input  type="integer"  name="total"  value=<?PHP echo $total;?>>
											</td>
											<td >
											<input  type="date"  name="fecha"  value=<?PHP echo $fecha;?>>
											</td>
											<td >
											<input  type="text"  name="pedido"  disabled="disabled" value=<?PHP echo $pedido;?>>
											</td>
																		
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="id_venta" value=<?PHP echo $id_venta;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $id_venta;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='venta2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DE LA VENTA </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='venta2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS EN LA VENTA:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>