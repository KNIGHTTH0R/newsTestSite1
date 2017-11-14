<?php
/* Smarty version 3.1.30, created on 2017-11-09 18:17:18
  from "C:\xampp\htdocs\Views\Comment\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a048d9e7d4291_62915931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96eb820ab9a9cda4ac7375183673307282d3c204' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Comment\\index.tpl',
      1 => 1510247833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a048d9e7d4291_62915931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15825700835a048d9e7d38e0_61586872', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_15825700835a048d9e7d38e0_61586872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <pre><?php echo debug($_smarty_tpl->tpl_vars['comments']->value);?>
</pre>
<?php
}
}
/* {/block 'body'} */
}
