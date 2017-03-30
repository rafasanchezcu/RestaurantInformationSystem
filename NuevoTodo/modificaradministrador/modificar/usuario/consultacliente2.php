<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $rut_usuario;
		$sql1="Select* from usuario where rut_usuario='".$rut_usuario."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL ESTUDIANTE </TITLE>";
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
							echo "RUT CLIENTE";
							echo "</th>";
							echo "<th>";
							echo "NOMBRE CLIENTE";
							echo "</th>";
							echo "<th>";
							echo "DIRECCION CLIENTE";
							echo "</th>";
							echo "<th>";
							echo "TELEFONO CLIENTE";
							echo "</th>";
							echo "<th>";
							echo "TIPO CLIENTE";
							echo "</th>";
							echo "<th>";
							echo "FECHA DE NACIMIENTO CLIENTE";
							echo "</th>";
							echo "<th>";
							echo "CEDULA DEL USUARIO";
							echo "</th>";
							echo "<th>";
							echo "CLAVE DEL USUARIO";
							echo "</th>";
							
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["rut_usuario"];
											$nombre=$row1["nombre_usuario"];
                                            $direccion=$row1["direccion_usuario"];
                                            $telefono=$row1["telefono_usuario"];
                                            $tipo=$row1["tipo_usuario"];
                                            $fecha=$row1["fechanac_usuario"];
                                            $cedula=$row1["cedula_usuario"];
                                            $clave1=$row1["clave"];
											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $codigo;?>>
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
											<input  type="text"  name="tipo"  value=<?PHP echo $tipo;?>>
											</td>
											<td >
											<input  type="date"  name="fecha"  value=<?PHP echo $fecha;?>>
											</td>
											<td >
											<input  type="text"  name="cedula"  value=<?PHP echo $cedula;?>>
											</td>
											<td >
											<input  type="text"  name="clave1"  value=<?PHP echo $clave1;?>>
											
											</td>
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="rut_usuario" value=<?PHP echo $rut_usuario;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $rut_usuario;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='cliente2.html' METHOD='POST'>";
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
							echo "<FORM ACTION='cliente2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE ESTUDIANTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>