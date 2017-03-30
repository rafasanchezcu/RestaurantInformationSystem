<!DOCTYPE html>
<html lang="en">
<head>
<title>Usuarios</title>
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
<body id="page5">
<div class="body6">
	<div class="body1">
		<div class="main"></br></br>
<!-- header -->
<header>
					
					
					<nav></br></br></br>
						<ul id="menu">
							<li class="active"><a href="inicio.html">Inicio</a></li>
							<li class="active"><a href="menu.html">Menu</a></li>
							<li class="active"><a href="nosotros.html">Nosotros</a></li>
							<li class="active"><a href="Contactos.html">Contactos</a></li>
							<li class="active"><a href="nosotros.html">Usuario</a></li>
						</ul>
					</nav>
				</header><div class="ic">More Website Templates  @ TemplateMonster.com - August 1st 2011!</div>
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing"><span>Ingrese Tus Datos</span></h2>

				
<!-- Start Formoid form-->
<link rel="stylesheet" href="contacto_files/formoid1/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="contacto_files/formoid1/jquery.min.js"></script>


<form class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" action="valida_usuario.php" method="POST">
<div class="title"><h2>Informacion Privada</h2></div>

<div>	<?php 
					if (isset($_GET["errorusuario"])=="si")
					{
				?> 
					<b>Datos incorrectos</b> 
				<?php
					}
					else
					{
				?> 
					Introduca sus claves de acceso 
				<?php 
					}
				?>    </div>
	
<div class="element-number"><label class="title"><span class="required"></span></label><div class="item-cont"><input class="large" type="text" min="0" max="9999" name="rut" required="required" placeholder="Rut Usuario" value=""/><span class="icon-place"></span></div></div>
	
<div class="element-password"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="clave" value="" placeholder="Password"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Entrar"/></div>
</form>
<script type="text/javascript" src="contacto_files/formoid1/formoid-solid-green.js"></script>

<!-- Stop Formoid form-->

						</div>
					</div>
				</div>
<div><h2>Si no eres usuario, ingresa aqui: <a href="cliente/registrarusuario/usuario.html">Inscripcion</a>  podras inscribirte y forma parte de nuestra empresa,
Puedes realizar reservas y disfrutar de excelentes beneficios.</h2></div>
			</article>


		</div>
	</div>
</div>

<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
		
<!-- / footer -->
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>