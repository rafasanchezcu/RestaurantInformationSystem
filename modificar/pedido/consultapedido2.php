<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $id_pedido;
		$sql1="Select* from pedido where id_pedido='".$id_pedido."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PEDIDO </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DEL PEDIDO SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "ID PEDIDO";
							echo "</th>";
							echo "<th>";
							echo "RUT DEL USUARIO";
							echo "</th>";
							echo "<th>";
							echo "TIPO DE PEDIDO";
							echo "</th>";
							echo "<th>";
							echo "ID DE MESA";
							echo "</th>";
							echo "<th>";
							echo "RUT PERSONAL";
							echo "</th>";
							echo "<th>";
							echo "FECHA DE PEDIDO";
							echo "</th>";
							
							
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["id_pedido"];
											$usuario=$row1["rut_usuario"];
                                            $tipo=$row1["tipo_pedido"];
                                            $mesa=$row1["id_mesa"];
                                            $personal=$row1["rut_personal"];
                                            $fecha=$row1["fecha_pedido"];
                                            
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $id_pedido;?>>
											</td>
											<td >
											<input  type="text"  name="usuario"  disabled="disabled" value=<?PHP echo $usuario;?>>
											</td>
											<td >
											<input  type="text"  name="tipo"  value=<?PHP echo $tipo;?>>
											</td>
											<td >
											<input  type="text"  name="mesa"  disabled="disabled" value=<?PHP echo $mesa;?>>
											</td>
											<td >
											<input  type="text"  name="personal"  disabled="disabled" value=<?PHP echo $personal;?>>
											</td>
											<td >
											<input  type="date"  name="fecha"  value=<?PHP echo $fecha;?>>
											</td>
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="id_pedido" value=<?PHP echo $id_pedido;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $id_pedido;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='pedido2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DEL PEDIDO </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='pedido2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE ESTUDIANTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>