<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 06.11.2017
 * Time: 15:19
 */

class CategoryController extends CoreController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex()
    {}

    /**
     * --------------------------------/
     * Show all news by some category
     * with pagination
     * -------------------------------/
     */
        public function actionShow()
    {
        $params=$this->getParams(0);
        #$this->debug($params);
        $params2=$params[0];
        $news=new NewsModel();
        $getNews=$news::getAllNewsByCat($params[0]);
        $lastPag=$news->pagination($params[0]);
        @$params1=$this->getParams(1);
        $currentPage=$params[1];
        $smarty=$this->getSmarty();
        #$smarty->assign(['getNews'=>$getNews]);
        $users=$this->getUsers();
        $smarty->display('Category/show.tpl',compact('users','getNews','currentPage','params2','lastPag'));

    }


    /**
     * @return mixed
     * ----------------------------------
     * return array with data of all
     * categories
     *
     */
    public function actionGetOnlyCategories()
    {
        $cats=new CategoryModel();
        $res=$cats::getCats();
        $smarty=$this->getSmarty();
        return $smarty->display('Category/showAllCats.tpl',compact('res'));

    }


}