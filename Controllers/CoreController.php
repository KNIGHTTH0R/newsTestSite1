<?php


abstract class CoreController
{
    private $smarty;
    private $params;
    private $session;
    private $url;

    public function __construct()
    {
        $this->url=$_SERVER['REQUEST_URI'];
        global $session;
        $this->session=$session;

        global $smarty;
        $this->smarty=$smarty;
        global  $params;
        $this->params=$params;


    }

    abstract public function actionIndex();

    public function getSmarty()
    {

        return $this->smarty;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getUsers(){
        $view=new ViewModel();
        $view->changeData($_SERVER['REQUEST_URI']);
        return $view->getNumberVisits($_SERVER['REQUEST_URI']);
    }

    /**'
     * method, that returns number of users
     * on the current page, not all
     */
    public function getUsersOnlineOnPage()
    {
        $online=new OnlineViewModel();
        $url=$_SERVER["REQUEST_URI"];
        $onlineNow=$online->getOnline($this->getSession()->getSession('session_id'),$url);
        return $onlineNow;
    }





    public function getSession()
    {
        return $this->session;
    }

    function debug($var)
    {
        echo "<pre><h1>";
        print_r($var);
        echo "</h1></pre>";
    }



    public function isAuth()
    {
        return (bool)$this->getSession()->getSession('user',false);
    }





}