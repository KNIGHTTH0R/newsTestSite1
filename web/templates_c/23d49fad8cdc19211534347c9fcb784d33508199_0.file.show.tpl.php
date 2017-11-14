<?php
/* Smarty version 3.1.30, created on 2017-11-07 19:33:36
  from "C:\xampp\htdocs\Views\Category\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a01fc8093fd90_74365793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23d49fad8cdc19211534347c9fcb784d33508199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\Category\\show.tpl',
      1 => 1510079615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a01fc8093fd90_74365793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17456301185a01fc8093ead3_86814541', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_17456301185a01fc8093ead3_86814541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['users']->value;?>
</h1>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getNews']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
        <h2><a href="/news/show/<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['name'];?>
</a></h2>
        <img src="/../web/img/<?php echo $_smarty_tpl->tpl_vars['new']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['new']->value['name'];?>
">
        <p><?php echo $_smarty_tpl->tpl_vars['new']->value['description'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['new']->value['author'];?>
</p>
        <hr size="30">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <ul>
            <?php if ($_smarty_tpl->tpl_vars['lastPag']->value > 3) {?>
            <?php if ($_smarty_tpl->tpl_vars['currentPage']->value == 1) {?>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+3;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value+3;?>
</a></li>

                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
" id="test1""> ... </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"> > </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lastPag']->value;?>
"> >>  </a></li>
            <?php } elseif ($_smarty_tpl->tpl_vars['currentPage']->value == 2) {?>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
"> ... </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"> > </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lastPag']->value;?>
"> >>  </a></li>
                <?php } else { ?>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/1"> << </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
"> < </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
</a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+2;?>
"> ... </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"> > </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lastPag']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lastPag']->value;?>
  </a></li>
                <li><a href="/category/show/<?php echo $_smarty_tpl->tpl_vars['params2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['lastPag']->value;?>
"> >>  </a></li>
            <?php }?>
            <?php }?>
        </ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getNews']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
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
