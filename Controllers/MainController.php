<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 06.11.2017
 * Time: 14:52
 */

class MainController extends CoreController
{

    public function __construct()
    {
        parent::__construct();

    }


    public function actionIndex()
    {

        $cat = new CategoryModel();
        $news = new NewsModel();
        $allCats = $cat::getCats();


        $res=[];
        $dataForSlider=NewsModel::getSomeNewsByCat();

        foreach ($allCats as  $pos) {
            $someNews=$news::getSomeNewsByCat($pos['id']);

            foreach ($someNews as $onePos)
            {
                $res[$pos['id']][$onePos['id']]=['parent'=>$onePos['cat_id'],'id'=>$onePos['id'],'name'=>$onePos['name'],'description'=>$onePos['description'],'img'=>$onePos['img']];

            }
        }
        $smarty=$this->getSmarty();
        $smarty->assign(['cats'=>$allCats,'news'=>$res,'slider'=>$dataForSlider]);
        $users=$this->getUsers();
        $smarty->display('Main/index.tpl',compact('users'));
}


    public function actionTest()
    {
        /*$online=new OnlineViewModel();

        $onlineNow=$this->getUsersOnlineOnPage();
        $users=$this->getUsers();
        $smarty=$this->getSmarty();
        return $smarty->display('Main/test.tpl',compact('users','onlineNow'));*/



        /**
         * ТЕСТ древа коммнентарий, категорий
         */



    }















}