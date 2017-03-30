<?PHP
// Activar errores
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
  include("click_retroceso.html");	
 extract($_POST);
  include("conec.php"); 
   
 $conn=conectarse(); 
	
		$sql1="Select* from plato where cod_plato='$cod'";
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if  ($numrows5!=0) 
					{
						
									 // SE RECOJE  LA  INFORMACION DE LOS ESTUDIANTES
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
							echo "<FORM ACTION='eliminar.php' METHOD='POST'>";
							echo "<table cellspacing='0' cellpadding='0' align='center'>";
							echo "<tr>";
							echo "<th>";
							echo "CODIGO PLATO";
							echo "</th>";
							echo "<th>";
							echo "PRECIO PLATO";
							echo "</th>";
							
							
							echo "<th>";
							echo "TIPO PLATO";
							echo "</th>";
							
                                                        echo "<th>";
							echo "DESCRIPCION PLATO";
							echo "</th>";
                                                        echo "<th>";
							echo "RUT PERSONAL";
							echo "</th>";
							
							if  ($row1 = pg_fetch_array($result1))		
												{
					 					 
											$var1=$row1["0"];
											$var2=$row1["1"];
                                                                                        $var3=$row1["2"];
                                                                                        $var4=$row1["3"];
                                                                                        $var5=$row1["4"];
											
                                                                                        
                                                                                        

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
											
                                                                                        
                                                                                        
											echo "</tr>";	 											
											
											
								}
								echo "</table>";
								echo "<table width='50%' align='center'>";
								echo "<tr>";
								echo "<td align='center' >";
								?>
							    <input  type="hidden"  name="cod2"  value=<?PHP echo $cod;?> >
								<?PHP
								echo "<INPUT TYPE='submit' VALUE='Eliminar' />";
								echo "</td>";
								echo "</FORM>";	
								echo "<FORM ACTION='plato1.html' METHOD='POST'>";
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
							echo "<FORM ACTION='plato1.html' METHOD='POST'>";
							echo "<h1><P align='center'>NO HAY DATOS DEL PLATO:</p></h1>";
							echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
							echo "</FORM>";	
							echo "</BODY>";
							echo "</html>";
				
					}
?>