<?PHP
// Activar errores
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
  include("click_retroceso.html");	
 extract($_POST);
  include("conec.php"); 
  echo $cedula; 
 $conn=conectarse(); 
	
		$sql1="Select* from usuario where cedula_usuario='$cedula'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS ESTUDIANTES
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
							echo "<FORM ACTION='eliminar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "RUT USUARIO";
							echo "</th>";
							echo "<th>";
							echo "NOMBRE USUARIO";
							echo "</th>";
							echo "<th>";
							echo "DIRECCION USUARIO";
							echo "</th>";
							echo "<th>";
							echo "TELEFONO USUARIO";
							echo "</th>";
							echo "<th>";
							echo "TIPO USUARIO";
							echo "</th>";
							echo "<th>";
							echo "FECHA DE NACIMIENTO USUARIO";
							echo "</th>";
                                                        echo "<th>";
							echo "CEDULA USUARIO";
							echo "</th>";
                                                        echo "<th>";
							echo "CLAVE USUARIO";
							echo "</th>";
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$var1=$row1["0"];
											$var2=$row1["1"];
                                                                                        $var3=$row1["2"];
                                                                                        $var4=$row1["3"];
                                                                                        $var5=$row1["4"];
											$var6=$row1["5"];
                                                                                        $var7=$row1["6"];
                                                                                        $var8=$row1["7"];

											echo "<tr>";
											echo "<td >";
											echo $var1;
											echo "</td>";
											echo "<td >";
											echo $var2;
											echo "</td>";
											echo "<td >";
											echo $var3;
											echo "</td>";
											echo "<td >";
											echo $var4;
											echo "</td>";
											echo "<td >";
											echo $var5;
											echo "</td>";
											echo "<td >";
											echo $var6;
											echo "</td>";
                                                                                        echo "<td >";
											echo $var7;
											echo "</td>";
                                                                                        echo "<td >";
											echo $var8;
											echo "</td>";
											echo "</tr>";	 											
											
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
							    <input  type="hidden"  name="cedula2"  value=<?PHP echo $cedula;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Eliminar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='../../menu_cliente.php' METHOD='POST'>";
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
							echo "<FORM ACTION='../../menu_cliente.php' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DE CLIENTE:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>