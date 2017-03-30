<?PHP
 extract($_POST);
  include("click_retroceso.html");	
 include("conec.php"); 
 $conn=conectarse(); 
	echo $cod_plato;
		$sql1="Select* from plato where cod_plato='".$cod_plato."'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS CLIENTES
					 					;
							echo "<html>";
							echo "<HEAD>";
							echo "<TITLE> DATOS DEL PLATO </TITLE>";
							?>

						<link href="tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="tablecloth/tablecloth.js"></script>

							<?PHP
							echo "</HEAD>";
							echo "<BODY>";
							echo "<h1><u><i> LOS  DATOS DEL PLATO SON:</i></u></h1>";
							echo "<FORM name='form1' ACTION='modificar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "COD. DEL PLATO";
							echo "</th>";
							echo "<th>";
							echo "PRECIO DEL PLATO";
							echo "</th>";
							echo "<th>";
							echo "TIPO DEL PLATO";
							echo "</th>";
							echo "<th>";
							echo "DESCRIPCION DEL PLATO";
							echo "</th>";
							echo "<th>";
							echo "RUT DEL PERSONAL";
							echo "</th>";
							
							
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$codigo=$row1["cod_plato"];
											$precio=$row1["precio_plato"];
                                            $tipo=$row1["tipo_plato"];
                                            $descripcion=$row1["descripcion_plato"];
                                            $personal=$row1["rut_personal"];
                                            
											
											
											?>
											 
											 <tr>
											<td >
											<input  type="text"  name="codigo1"  disabled="disabled"  value=<?PHP echo $cod_plato;?>>
											</td>
											<td >
											<input  type="text"  name="precio"  value=<?PHP echo $precio;?>>
											</td>
											<td >
											<input  type="text"  name="tipo"  value=<?PHP echo $tipo;?>>
											</td>
											<td >
											<input  type="text"  name="descripcion"  value=<?PHP echo $descripcion;?>>
											</td>
											<td >
											<input  type="text"  name="personal"  disabled="disabled" value=<?PHP echo $personal;?>>
											</td>
											
											</tr> 
																	
											<?PHP
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
								<input  type="hidden"  name="cod_plato" value=<?PHP echo $cod_plato;?>>
							    <input  type="hidden"  name="codigo2"  value=<?PHP echo $cod_plato;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Modificar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='plato2.html' METHOD='POST'>";
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
							echo "<TITLE> DATOS DEL PLATO </TITLE>";
							echo "</HEAD>";
							echo "<BODY>";
							echo "<FORM ACTION='plato2.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DEL PLATO:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>