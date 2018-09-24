<?php
/* Smarty version 3.1.32, created on 2018-09-24 15:19:46
  from 'C:\xampp2\htdocs\ArtMarVal\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba92ac2c9f876_73631479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f22968be79a32050f5e3fc756d66a8db36ecb5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\ArtMarVal\\themes\\classic\\templates\\page.tpl',
      1 => 1537807969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba92ac2c9f876_73631479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2979304135ba92ac2bffdc0_48116935', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12331221415ba92ac2c02a79_20462471 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19478013295ba92ac2c01949_44179992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12331221415ba92ac2c02a79_20462471', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4500004265ba92ac2c9a7d4_74492331 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4425201775ba92ac2c9b670_76234727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20265892805ba92ac2c99bd7_00637036 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4500004265ba92ac2c9a7d4_74492331', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4425201775ba92ac2c9b670_76234727', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3367879025ba92ac2c9dd69_68084384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11770965715ba92ac2c9d2c4_58382469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3367879025ba92ac2c9dd69_68084384', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2979304135ba92ac2bffdc0_48116935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2979304135ba92ac2bffdc0_48116935',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19478013295ba92ac2c01949_44179992',
  ),
  'page_title' => 
  array (
    0 => 'Block_12331221415ba92ac2c02a79_20462471',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20265892805ba92ac2c99bd7_00637036',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4500004265ba92ac2c9a7d4_74492331',
  ),
  'page_content' => 
  array (
    0 => 'Block_4425201775ba92ac2c9b670_76234727',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11770965715ba92ac2c9d2c4_58382469',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3367879025ba92ac2c9dd69_68084384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19478013295ba92ac2c01949_44179992', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20265892805ba92ac2c99bd7_00637036', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11770965715ba92ac2c9d2c4_58382469', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
