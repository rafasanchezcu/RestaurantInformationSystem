<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-light-green.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-light-green.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-solid-light-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#00aa00;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Usuario</h2></div>
	<div class="element-number<?frmd_add_class("number")?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="9999" name="number" required="required" placeholder="number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-input<?frmd_add_class("input1")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input1" placeholder="Name"/><span class="icon-place"></span></div></div>
	<div class="element-input<?frmd_add_class("input")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input" placeholder="Address"/><span class="icon-place"></span></div></div>
	<div class="element-phone<?frmd_add_class("phone")?>"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" placeholder="Phone" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select<?frmd_add_class("select")?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="cliente">cliente</option>
		<option value="administrador">administrador</option>
		<option value="programador">programador</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-date<?frmd_add_class("date")?>"><label class="title"></label><div class="item-cont"><input class="large" data-format="yyyy-mm-dd" type="date" name="date" placeholder="Date"/><span class="icon-place"></span></div></div>
	<div class="element-number<?frmd_add_class("number1")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number1" placeholder="Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-password<?frmd_add_class("password")?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="password" name="password" value="" required="required" placeholder="Password"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?=dirname($form_path)?>/formoid-solid-light-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>