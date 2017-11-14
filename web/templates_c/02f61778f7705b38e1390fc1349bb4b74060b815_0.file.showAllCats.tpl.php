<?php
/* Smarty version 3.1.30, created on 2017-11-09 10:06:47
  from "C:\xampp\htdocs\Views\Category\showAllCats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a041aa79a8869_93992714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f61778f7705b38e1390fc1349bb4b74060b815' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Category\\showAllCats.tpl',
      1 => 1510218402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a041aa79a8869_93992714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12823823825a041aa79a7cb9_03456584', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_12823823825a041aa79a7cb9_03456584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <ul class="list-group">




<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <li class="list-group-item"><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/1"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
<?php
}
}
/* {/block 'body'} */
}
