<?php
/* Smarty version 3.1.32, created on 2018-09-24 15:19:48
  from 'C:\xampp2\htdocs\ArtMarVal\themes\classic\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba92ac44163e1_47262088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d20b436b95e9c4353ffedc687729739b96b08dc' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ArtMarVal\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1537807968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba92ac44163e1_47262088 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
