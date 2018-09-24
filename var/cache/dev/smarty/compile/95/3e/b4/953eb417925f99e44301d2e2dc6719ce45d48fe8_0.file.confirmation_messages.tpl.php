<?php
/* Smarty version 3.1.32, created on 2018-09-23 22:26:48
  from 'C:\xampp\htdocs\ArtMarVal\admin6846zogbg\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba83d58171bc7_74687159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953eb417925f99e44301d2e2dc6719ce45d48fe8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ArtMarVal\\admin6846zogbg\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1536448363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba83d58171bc7_74687159 (Smarty_Internal_Template $_smarty_tpl) {
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
