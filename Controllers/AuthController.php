<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 09.11.2017
 * Time: 16:46
 */

class AuthController extends  CoreController
{

    public function actionIndex()
    {
    }

    public function actionRegister()
    {
        if($_SERVER['REQUEST_METHOD']=='GET')$this->getSmarty()->display('Auth/register.tpl');
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $userModel=new UserModel($email,$pass);
        if(!$userModel->registerUser())die("ERROR");

        $this->getSession()->setSession('user',$userModel);

        header("Location:/");
    }


    public function actionLogin()
    {
        if($_SERVER['REQUEST_METHOD']=='GET')return $this->getSmarty()->display('Auth/login.tpl');
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $userModel=new UserModel($email,$pass);

       if(!$userModel->loginUser())die("LOgin error");
        $userData=$userModel->userExist($email,'asdasd');
        $this->getSession()->setSession('user',$userData);

        header("Location:/");

    }



    public function actionLogout()
    {

       $this->getSession()->unsetSession('user');
       header("Location:/");
    }


}