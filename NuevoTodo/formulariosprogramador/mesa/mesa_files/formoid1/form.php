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
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Comic Sans MS',cursive;color:#5555ff;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Mesa</h2></div>
	<div class="element-number<?frmd_add_class("number")?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99" name="number" required="required" placeholder="Number" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?frmd_add_class("number1")?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="1" max="9" name="number1" placeholder="Chairs Available" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select<?frmd_add_class("select")?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="Sector A">Sector A</option>
		<option value="Sector B">Sector B</option>
		<option value="Sector C">Sector C</option></select><i></i><span class="icon-place"></span></span></div></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?=dirname($form_path)?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>