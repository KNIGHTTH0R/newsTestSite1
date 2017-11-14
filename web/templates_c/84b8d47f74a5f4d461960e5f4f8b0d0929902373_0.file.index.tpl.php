<?php
/* Smarty version 3.1.30, created on 2017-11-07 16:52:22
  from "C:\xampp\htdocs\Views\Main\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a01d6b6859b98_65950961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b8d47f74a5f4d461960e5f4f8b0d0929902373' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Main\\index.tpl',
      1 => 1510068614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a01d6b6859b98_65950961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19892890675a01d6b6858bc2_53972713', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_19892890675a01d6b6858bc2_53972713 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</h1>
       
    <div id="slider">
        <div id="polosa">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
            <img src="/../../web/img/<?php echo $_smarty_tpl->tpl_vars['slide']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['name'];?>
">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <button id="left">Left</button>
    <button id="right">Right</button>

    <?php echo '<script'; ?>
 src="/../../web/js/script.js"><?php echo '</script'; ?>
>





    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
    <h1><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a></h1>

    <ul>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['cat']->value['id'] == $_smarty_tpl->tpl_vars['key']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'value1', false, 'key1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['value1']->value) {
?>
         <li><a href="/news/show/<?php echo $_smarty_tpl->tpl_vars['value1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value1']->value['name'];?>
</a> </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>

         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>








    </ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<?php
}
}
/* {/block 'body'} */
}
