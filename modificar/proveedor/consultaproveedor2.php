<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $rut_proveedor;
		$sql1="Select* from proveedor where rut_proveedor='".$rut_proveedor."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PROVEEDOR </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DEL PROVEEDOR SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "RUT PROVEEDOR";
							echo "</th>";
							echo "<th>";
							echo "NOMBRE PROVEEDOR";
							echo "</th>";
							echo "<th>";
							echo "DIRECCION PROVEEDOR";
							echo "</th>";
							echo "<th>";
							echo "TELEFONO PROVEEDOR";
							echo "</th>";
							echo "<th>";
							echo "EMAIL DEL PROVEEDOR";
							echo "</th>";
							
							
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["rut_proveedor"];
											$nombre=$row1["nombre_proveedor"];
                                            $direccion=$row1["direccion_proveedor"];
                                            $telefono=$row1["telefono_proveedor"];
                                            $email=$row1["mail_proveedor"];
                                            											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $rut_proveedor;?>>
											</td>
											<td >
											<input  type="text"  name="nombre"  value=<?PHP echo $nombre;?>>
											</td>
											<td >
											<input  type="text"  name="direccion"  value=<?PHP echo $direccion;?>>
											</td>
											<td >
											<input  type="text"  name="telefono"  value=<?PHP echo $telefono;?>>
											</td>
											<td >
											<input  type="email"  name="email"  value=<?PHP echo $email;?>>
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
								echo "<FORM ACTION='proveedor2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DEL PROVEEDOR </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='proveedor2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE ESTUDIANTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>