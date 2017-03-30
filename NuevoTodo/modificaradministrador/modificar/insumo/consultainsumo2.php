<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $cod_insumo;
		$sql1="Select* from insumo where cod_insumo='".$cod_insumo."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL INSUMO </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DEL INSUMO SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "COD INSUMO";
							echo "</th>";
							echo "<th>";
							echo "NOMBRE INSUMO";
							echo "</th>";
							echo "<th>";
							echo "CANTIDAD";
							echo "</th>";
							
							
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["cod_insumo"];
											$nombre=$row1["nombre_insumo"];
                                            $cantidad=$row1["cantidad_insumo"];
                                            
											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $cod_insumo;?>>
											</td>
											<td >
											<input  type="text"  name="nombre"  value=<?PHP echo $nombre;?>>
											</td>
											<td >
											<input  type="text"  name="cantidad"  value=<?PHP echo $cantidad;?>>
											</td>

											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="cod_insumo" value=<?PHP echo $cod_insumo;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $cod_insumo;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='insumo2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DEL INSUMO </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='insumo2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE ESTUDIANTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>