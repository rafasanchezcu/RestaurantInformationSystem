<?PHP
//Inicio la sesión
session_start();

 include("libreria.php");
   //llena  la  variable  con el titulo esperado 
     $titulo="Sistema de la Empresa mas Impotante"; 
	 hacer_encabezado($titulo);
?>

 <html lang="en">
<head>

<title>Menu</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page3">
<div class="body6">
	<div class="body1">
		<div class="main"> </br></br></br></br></br></br></br>
<!-- header -->
			
<!-- / header -->
<!-- content --> <div> <?PHP echo "<b>Bienvenido</b> </br>",$_SESSION['nombre2'],"</br> <b>Tipo De Usuario: ADMINISTRADOR</b> "; ?> </diV></br>
			<article id="content">
				<div class="wrap">
					<section class="cols">
						<div class="box">
							<div>
								<h2 class="letter_spacing"> <span>ELIMINAR TABLAS EN LA BD</span></h2>
								<figure><img src="images/page3_img11.jpg" alt="" ></figure>
								<p class="pad_bot1">Eliminar datos registrados en la bd.</p>
								<a href="eliminaradministrador/eliminar1.html" class="button1">Ingresar</a>
							</div>
						</div>
					</section>
					<section class="cols pad_left1">
						<div class="box">
							<div>
								<h2> <span>MODIFICAR CUENTAS EN LA BD </span></h2>
								<figure><img src="images/page3_img22.jpg" alt="" ></figure>
								<p class="pad_bot1">Actualizar informacion en la bd.</p>
								<a href="cliente2.html" class="button1">Ingresar</a>
							</div>
						</div>
					</section>
					<section class="cols pad_left1">
						<div class="box">
							<div>
								<h2><span>INGRESAR DATOS EN LA BD</span></h2>
								<figure><img src="images/page3_img33.jpg" alt="" ></figure>
								<p class="pad_bot1">Ingresa informacio actualizada a la bd.</p>
								<a href="http://www.vinoteca.com/best-values" class="button1">Ingresar</a>
							</div>
						</div>
					</section>
				</div>
			</article>

 <div><a href="valida1.php"><h2>Cerrar Sesion</h2></a></div>
		</div>
	</div>
</div>


<!-- footer -->
			
<!-- / footer -->
	
 
 </body>
 </html>