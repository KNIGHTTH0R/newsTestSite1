<?php
function debug($var)
{
    echo "<pre><h1>";
    print_r($var);
    echo "</h1></pre>";
}
$request=$_SERVER['REQUEST_URI'];
const DC=DIRECTORY_SEPARATOR;
$root=realpath(__DIR__.'/..');


require_once ($root."/libs/Smarty.class.php");
$smarty=new Smarty();
$smarty->setTemplateDir("{$root}/Views");


#echo $request."<br>";

$request=ltrim($request,'/');
$path=explode('/',$request);
$controller=ucfirst(array_shift($path));
$controller=($controller)?$controller."Controller":'MainController';
$action=ucfirst(array_shift($path));
$action=($action)?'action'.$action:'actionIndex';
$params=[];
$pahtC=count($path);
for($i=0;$i<$pahtC;$i++)
{
    $params[$i]=ucfirst(array_shift($path));
}



spl_autoload_register(function($path) use ($root)
{
    $type='Helpers';
$type=(strpos($path,'Controller'))?'Controllers':$type;
$type=(strpos($path,'Model'))?'Models':$type;

$loadPath=$root.DC.$type.DC.$path.'.php';
if(file_exists($loadPath))require_once ($root.DC.$type.DC.$path.'.php');
else die("OOPS page ==> {$loadPath} <br>was not found");

});

$session=new Session();



$obj=new $controller();
if(!method_exists($obj= new $controller,$action))die('Action was not found');
$obj->$action();





























?>


