<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $id_mesa;
		$sql1="Select* from mesa where id_mesa='".$id_mesa."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DE LA MESA </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DE LA MESA SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "ID MESA";
							echo "</th>";
							echo "<th>";
							echo "CANTIDAD MAX. POR MESA";
							echo "</th>";
							echo "<th>";
							echo "ZONA";
							echo "</th>";
														
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["id_mesa"];
											$cantidad=$row1["cantmax_mesas"];
                                            $ubicacion=$row1["ubicacion"];
                                           
											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $id_mesa;?>>
											</td>
											<td >
											<input  type="text"  name="cantidad"  value=<?PHP echo $cantidad;?>>
											</td>
											<td >
											<input  type="text"  name="ubicacion"  value=<?PHP echo $ubicacion;?>>
											</td>
											
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="id_mesa" value=<?PHP echo $id_mesa;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $id_mesa;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='mesa2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DE LA MESA </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='mesa2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE ESTUDIANTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>