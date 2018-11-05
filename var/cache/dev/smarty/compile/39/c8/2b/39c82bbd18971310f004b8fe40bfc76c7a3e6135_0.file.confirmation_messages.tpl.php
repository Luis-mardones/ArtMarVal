<?php
/* Smarty version 3.1.32, created on 2018-11-05 17:06:23
  from 'C:\xampp2\htdocs\ArtMarVal\admin6846zogbg\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0a2bfa50d71_02145725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39c82bbd18971310f004b8fe40bfc76c7a3e6135' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ArtMarVal\\admin6846zogbg\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1537807826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be0a2bfa50d71_02145725 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
