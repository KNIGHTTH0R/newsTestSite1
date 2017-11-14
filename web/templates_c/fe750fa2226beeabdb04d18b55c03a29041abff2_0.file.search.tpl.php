<?php
/* Smarty version 3.1.30, created on 2017-11-09 12:48:35
  from "C:\xampp\htdocs\Views\News\search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a044093bf94e8_98894122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe750fa2226beeabdb04d18b55c03a29041abff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\News\\search.tpl',
      1 => 1510228112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a044093bf94e8_98894122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16934994005a044093bf88f0_71347787', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_16934994005a044093bf88f0_71347787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['res']->value !== false) {?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>

            <div class="card mb-3">
                <img class="card-img-top" src="../../web/img/<?php echo $_smarty_tpl->tpl_vars['post']->value['img'];?>
" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</h4>
                    <p class="card-text">
                        <?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
    <h1>Posts with that tag not found now </h1>

<?php }?>


<?php
}
}
/* {/block 'body'} */
}
