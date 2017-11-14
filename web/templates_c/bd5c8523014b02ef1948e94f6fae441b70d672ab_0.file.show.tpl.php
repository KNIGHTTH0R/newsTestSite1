<?php
/* Smarty version 3.1.30, created on 2017-11-10 12:29:32
  from "C:\xampp\htdocs\Views\News\show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a058d9c5ffe37_78060273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd5c8523014b02ef1948e94f6fae441b70d672ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\News\\show.tpl',
      1 => 1510313371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a058d9c5ffe37_78060273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2890407645a058d9c5ff4f2_58938897', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_2890407645a058d9c5ff4f2_58938897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <pre><?php echo print_r($_smarty_tpl->tpl_vars['newMsg']->value);?>
</pre>
    <?php if ($_smarty_tpl->tpl_vars['newMsg']->value !== false) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newMsg']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
    <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['msg']->value['name'];?>
</h1>
    <img src="/../web/img/<?php echo $_smarty_tpl->tpl_vars['msg']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['msg']->value['name'];?>
">
    <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value['author'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value['description'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['msg']->value['time_create'];?>
</p>
        <?php if (!isset($_SESSION['user'])) {?>

            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right"
                    data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on right
            </button><br>
        <?php } else { ?>
            <button  style="font-size: 70px;color: red"  id="ReadMore" >Read analytics </button><br>
            <div class="ReadOff" id="block1">
                <h1>SOme test text when i don`t have anal text</h1>
            <p ><?php echo $_smarty_tpl->tpl_vars['msg']->value['full_text'];?>
</p>
            </div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getTags']->value, 'singleTag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['singleTag']->value) {
?>
            <a href="/news/search/<?php echo $_smarty_tpl->tpl_vars['singleTag']->value['tag_id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['singleTag']->value['tag_name'];?>
 </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <form action="/news/show/<?php echo $_smarty_tpl->tpl_vars['msg']->value['id'];?>
" method="post">
            <textarea name="textComment"></textarea>
            <input type="submit">

        </form>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
        <h1>Undefinded News</h1>
    <p>This news was lost, we`re finding it!</p>
    <?php }?>
    <p>Post was reading <?php echo $_smarty_tpl->tpl_vars['users']->value;?>
 times</p>
    <h3>Now <?php echo $_smarty_tpl->tpl_vars['onlineNow']->value;?>
</h3>
<?php
}
}
/* {/block 'body'} */
}
