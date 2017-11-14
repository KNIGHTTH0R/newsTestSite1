<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 07.11.2017
 * Time: 21:33
 */

class NewsController extends CoreController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex()
    {
        $post=new NewsModel();
        $this->debug($post::getAllNewsByCat());
    }


    public function actionShow()
    {
        $oneNews=new NewsModel();
        $comment=new CommentModel();


        # поиск необходимых параметров
        $getId=$this->getParams(0);
        $getId=$getId[0];
        $user=$_SESSION['user']['id'];


        # добавление коммнетариев
        $textComment=$_POST['textComment'];
        $comment->createComment($getId,$user,$textComment);


        # поиск новости по id
        $newMsg=$oneNews->getOneNews($getId);

        # поиск тегов к новости
        $getTags=$oneNews->addTagsToPost($getId);


        # если нету такой новости, то прокидывать false вместо массива
        if($newMsg===false) $newMsg=false;
    else{
        # данные по просмотрам(все + онлайн юзеры);
        $rand=rand(0,7);
        $onlineNow=$this->getUsersOnlineOnPage()+$rand;
        $users=$this->getUsers();

        /**
         * -------------------------------------------------------------------------------------------------
         * --------------------------------------------------------------------------------------------------
         *                          Доделать древо новостей
         * --------------------------------------------------------------------------------------------------
         * --------------------------------------------------------------------------------------------------
         */
        #поиск комментов к новости

        $commentArr=$comment->getAllCommentsByPost($getId);
        function form_tree($mess)
        {
            if (!is_array($mess)) {
                return false;
            }
            $tree = array();
            foreach ($mess as $value) {
                $tree[$value['author']][$value['parent_comment']] = $value;
            }
            return $tree;
        }

        $tree = form_tree($commentArr);

        $smarty=$this->getSmarty();
    }
        /**
         * -------------------------------------------------------------------------------------------------
         * --------------------------------------------------------------------------------------------------
         * --------------------------------------------------------------------------------------------------
         * --------------------------------------------------------------------------------------------------
         */



        $smarty->display('News/show.tpl',compact('newMsg','users','onlineNow','getTags'));
    }



















    /**
     * @param $tag_id
     * -----------------------------------
     * search all news by $tag_id tag
     * -----------------------------------
     */
    public function actionSearch()
    {
        $newsModel=new NewsModel();

        #ищем тег
        $tag_id=$this->getParams();
        $tag_id=$tag_id[0];
        # собираем данные согласно тега
        $res=($request=$newsModel->findPostsByTag($tag_id))?$request:false;

        $smarty=$this->getSmarty();
        $smarty->display('News/search.tpl',compact('res'));
    }


    /**
     * ---------------------------------------------
     * обработка строки онлайн
     * --------------------------------------------
     */
    public function actionLine(){
        $db=DB::getInstance();
        if(!empty($_POST["referal"])){ //Принимаем данные
            $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
            $db_referal = $db-> query("SELECT * FROM  news  WHERE name LIKE '%$referal%'")
            or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');

            while ($row = $db_referal -> fetch_array()) {
                echo "\n<li>".$row["name"]."</li>"; //$row["name"] - имя поля таблицы
            }

        }

    }



}