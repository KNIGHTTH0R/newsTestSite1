<?php
/* Smarty version 3.1.30, created on 2017-11-07 18:41:43
  from "C:\xampp\htdocs\Views\Main\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a01f057b0e3e2_18827444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74ef831266ed995e2b82bb312371bc1707a1fb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Main\\test.tpl',
      1 => 1510076377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a01f057b0e3e2_18827444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10594516075a01f057b0d616_16835319', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_10594516075a01f057b0d616_16835319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</h1>
    <h1>Online NOW ==> <?php echo $_smarty_tpl->tpl_vars['onlineNow']->value;?>
</h1>

<?php
}
}
/* {/block 'body'} */
}
