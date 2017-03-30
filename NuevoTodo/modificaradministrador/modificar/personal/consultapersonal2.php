<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $rut_personal;
		$sql1="Select* from personal_1 where rut_personal='".$rut_personal."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PERSONAL </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DEL PERSONAL SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "RUT PERSONAL";
							echo "</th>";
							echo "<th>";
							echo "NOMBRE PERSONAL";
							echo "</th>";
							echo "<th>";
							echo "TELEFONO PERSONAL";
							echo "</th>";
							echo "<th>";
							echo "DIRECCION PERSONAL";
							echo "</th>";
							echo "<th>";
							echo "TIPO PERSONAL";
							echo "</th>";
							echo "<th>";
							echo "TURNO DEL PERSONAL";
							echo "</th>";
														
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$rut_personal=$row1["rut_personal"];
											$nombre=$row1["nombre_personal"];
                                            $telefono=$row1["telefono_personal"];
                                            $direccion=$row1["direccion_personal"];
                                            $tipo=$row1["cod_tipo"];
                                            $turno=$row1["cod_turno"];
                                           
											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $rut_personal;?>>
											</td>
											<td >
											<input  type="text"  name="nombre"  value=<?PHP echo $nombre;?>>
											</td>
											<td >
											<input  type="text"  name="telefono"  value=<?PHP echo $telefono;?>>
											</td>
											<td >
											<input  type="text"  name="direccion"  value=<?PHP echo $direccion;?>>
											</td>
											<td >
											<input  type="text"  name="tipo"  disabled="disabled" value=<?PHP echo $tipo;?>>
											</td>
											<td >
											<input  type="text"  name="turno"  disabled="disabled" value=<?PHP echo $turno;?>>
											</td>
											
											
											</td>
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="rut_personal" value=<?PHP echo $rut_personal;?>>
							    <input  type="hidden"  name="codigo"  value=<?PHP echo $rut_personal;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='personal2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DEL CLIENTE </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='personal2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DEL PERSONAL:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>