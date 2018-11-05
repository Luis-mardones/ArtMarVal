<?php
/* Smarty version 3.1.32, created on 2018-11-05 17:09:47
  from 'C:\xampp2\htdocs\ArtMarVal\admin6846zogbg\themes\default\template\controllers\cms_content\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0a38b9ebcb8_50944846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5084430a897e8285036dd3556f3b58ef7dadb1' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ArtMarVal\\admin6846zogbg\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1537807815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be0a38b9ebcb8_50944846 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	<?php echo '</script'; ?>
>
<?php }
}
}
