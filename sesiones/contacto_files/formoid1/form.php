<?php

define('EMAIL_FOR_REPORTS', 'rafaa.sanchez@hotmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Gracias por tu opinión, estaremos informandote.
Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-green.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-solid-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Informacion</h2></div>
	<div class="element-input<?frmd_add_class("input")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Nombre Completo"/><span class="icon-place"></span></div></div>
	<div class="element-input<?frmd_add_class("input1")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Direccion"/><span class="icon-place"></span></div></div>
	<div class="element-phone<?frmd_add_class("phone")?>"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Telefono" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?frmd_add_class("input2")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Ciudad"/><span class="icon-place"></span></div></div>
	<div class="element-input<?frmd_add_class("input3")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input3" placeholder="Pais"/><span class="icon-place"></span></div></div>
	<div class="element-email<?frmd_add_class("email")?>"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="E-mail"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?frmd_add_class("textarea")?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Comentario"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?=dirname($form_path)?>/formoid-solid-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>