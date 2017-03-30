<?PHP
//Inicio la sesión
session_start();
//vemos si el usuario y contraseña es válido
 include("conec.php"); 
 $conn=conectarse(); 
 extract($_POST);
 //echo $conn;
$sql1="Select * from usuario  where rut_usuario='".$rut."' and clave ='".$clave."'";
//echo $sql1;
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if ($numrows5==0) 
				{
				header("Location: valida1.php?errorusuario=si");
				}
				else 
				{
				$row1 = pg_fetch_array($result1);
                                $nombre1 = $row1["nombre_usuario"];
                                $direccion1 = $row1["direccion_usuario"];
                                $telefono1 = $row1["telefono_usuario"];
				$tipo_usuario1 = $row1["tipo_usuario"];
				$fecha1 = $row1["fechanac_usuario"];
                                $cedula1 = $row1["cedula_usuario"];
				
				$_SESSION["usuario1"]=$rut;
				$_SESSION["clave1"]=$clave;
				$_SESSION["nombre2"]=$nombre1;
				
				echo $tipo_usuario1;
				
				if ($tipo_usuario1=='cliente')
				{
				header("Location:  menu_cliente.php");
				exit(); 
				
				}
				if ($tipo_usuario1=='administrador')
				{
				header("Location:  menu_administrador.php");
				exit(); 
				
				}
				if ($tipo_usuario1=='programador')
				{
				header("Location:  menu_programador.php");
				exit(); 
				
				}
				
	


	

}
?>