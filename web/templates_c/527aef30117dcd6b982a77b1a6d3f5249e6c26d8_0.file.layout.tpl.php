<?php
/* Smarty version 3.1.30, created on 2017-11-10 12:20:02
  from "C:\xampp\htdocs\Views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a058b62333ce8_17767883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '527aef30117dcd6b982a77b1a6d3f5249e6c26d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Views\\layout.tpl',
      1 => 1510312801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a058b62333ce8_17767883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Latest compiled JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/../web/css/style.css">
    <?php echo '<script'; ?>
 src="/../web/js/search.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/../web/js/main.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/../web/css/main.css">
    <title>Document</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9984658875a058b623318c6_87387284', 'nav');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4816714525a058b62333508_64388418', 'body');
?>













</body>
</html><?php }
/* {block 'nav'} */
class Block_9984658875a058b623318c6_87387284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/category/GetOnlyCategories">Categories</a></li>
                <li><a href="/news/show/1">News</a></li>
                <li><a href="/comment/index">Comments</a></li>
            </ul>
            <form class="navbar-form navbar-left">

                <div class="form-group">
                    <input type="text" class="form-control who" placeholder="Search" name="referal" autocomplete="off">
                    <ul class="search_result"></ul>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($_SESSION['user'])) {?>

                <li><a href="/auth/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            <?php } else { ?>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['user']['email'];?>
 </a></li>
                <li><a href="/auth/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php }?>
            </ul>
        </div>
    </nav>
<?php
}
}
/* {/block 'nav'} */
/* {block 'body'} */
class Block_4816714525a058b62333508_64388418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<?php
}
}
/* {/block 'body'} */
}
