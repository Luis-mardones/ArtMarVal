<?php
/* Smarty version 3.1.32, created on 2018-11-21 15:46:05
  from 'C:\xampp\htdocs\ArtMarVal\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf5a7ed94f1e9_63798030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fca638f8615bdb12e4220ff2b899bb803baaa39f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ArtMarVal\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1536448395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf5a7ed94f1e9_63798030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4567226825bf5a7ed947428_15387735', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_4567226825bf5a7ed947428_15387735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_4567226825bf5a7ed947428_15387735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
