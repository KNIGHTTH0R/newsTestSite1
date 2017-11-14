<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 06.11.2017
 * Time: 15:33
 */

class NewsModel
{
    private $id;
    private $name;
    private $description;
    private $author;
    private $cat_id;
    private $time_create;
    private $likes;
    public  $max;


    const TABLE="news";
    const ALTER_TABLE='post_tag';

    /**
     * List of Methods
     * public static function getAllNewsByCat
     * public function pagination
     * public function getOneNews
     *  public static function getSomeNewsByCat
     * public static function getItems
     * public function addTagsToPost
     * public function findPostsByTag
     *
     */

    public function __construct($name='',$author='',$cat_id=0,$description='')
    {
            $this->name=$name;
            $this->author=$author;
            $this->cat_id=$cat_id;
            $this->description=$description;
    }


    /**
     * @param int $id
     * @param int $page
     * @param string $latest
     * @return mixed
     * -----------------------------------
     * Method HELPER to category page
     * Show all news from category_id
     * with pagination
     *--------------------------------------
     */
    public static function getAllNewsByCat($id=50,$page=0,$latest="DESC"){
        $query="SELECT * FROM `".self::TABLE."`WHERE `cat_id`=".$id."  ORDER BY `id`".$latest;
        $db=DB::getInstance();
        $query1="SELECT * FROM `".self::TABLE."`WHERE `cat_id`=".$id;
        $res1=$db->query($query);
        $num=mysqli_num_rows($res1);
        $max=5;
        global $params;
        $currentPage=(isset($params[1]))?$params[1]:1;
        $pages=ceil($num/$max);

        $start=($currentPage-1)*5;
        $query2="SELECT * FROM `".self::TABLE."`WHERE `cat_id`=".$id." LIMIT {$start},{$max}";

        return $db->query($query2)->fetch_all(MYSQLI_ASSOC);

    }


    /**
     * @param $id
     * @return float
     * ------------------------------------------
     * return number of pages
     * from news==>category_id
     * to our pagination
     * ------------------------------------------
     */
    public function pagination($id)
    {
        $db=DB::getInstance();
        $query1="SELECT * FROM `".self::TABLE."`WHERE `cat_id`=".$id;
        $res1=$db->query($query1);
        $num=mysqli_num_rows($res1);
        $max=5;
        $pages=ceil($num/$max);
        return $pages;
    }


    /**
     * @param $id
     * @return bool|mixed
     * ----------------------------------------
     * return post from table news
     * which has id=$id
     * or FALSE  if this post
     * is not availvable
     * ----------------------------------------
     */
    public function getOneNews($id)
    {
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::TABLE."` WHERE `id`= ".$id." LIMIT 1";
        $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);
        # в случае сбоя прокидывать в вид false
        if(!$res)return false;
        return $res;

    }


    /**
     * @param string $id ===> choose news from category id
     * @param int $limit  ===> limit of posts
     * @param string $latest ===> add sort of  ORDER BY
     * @return mixed
     * -----------------------------------------------------
     * method which return array with posts from our id category
     *                      OR
     * return $limit number of latest($if $latest ==> def) posts
     * from news table
     * --------------------------------------------------------
     */
    public static function getSomeNewsByCat($id='generate',$limit=5,$latest="DESC")
    {
        $db=DB::getInstance();
        if(!is_int($id)){
            $query="SELECT * FROM `".self::TABLE."`  ORDER BY `id`".$latest." LIMIT ".$limit;
        }
        else {
            $id=intval($id);

            $query="SELECT * FROM `".self::TABLE."` WHERE `cat_id`=".$id.
                " ORDER BY `".self::TABLE."`.`id`".$latest." LIMIT ".$limit;

        }

        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }


    /**
     * @param int $page ==> number of current page
     * @param int $perPage
     * ------------------------------------------
     *method which returns array
     * with number of posts from
     *out table in some range
     *--------------------------------------------
     * @return mixed
     */
    public static function getItems($page=1,$perPage=8)
    {
        $db = DB::getInstance();
        $query = "SELECT `" . self::TABLE . "`.*, `categories`.`name` as `category_name` 
        FROM `".self::TABLE."`
        LEFT JOIN `categories` 
        ON `categories`.`id` = `".self::TABLE."`.`category_id`
        ORDER BY `id` DESC";
        if($page && $perPage) {
            $query .= " LIMIT " . ($page - 1) * $perPage . "," . $perPage;
        }
        #print_r($db->query($query)->fetch_all(MYSQLI_ASSOC));
        #die();
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * ---------------------------------
     * add tags to Our post
     * ----------------------------------
     */
    public function addTagsToPost($post_id)
    {
        # выбрать одну новость месте с тегами
        $query="SELECT post_tag.tag_id,tags.tag_name FROM post_tag 
LEFT JOIN tags ON post_tag.tag_id=tags.tag_id WHERE post_tag.post_id=".$post_id;
        $db=DB::getInstance();
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * --------------------------------------
     *
     */
    public function findPostsByTag($tag_id)
    {
       $db=DB::getInstance();
       $query="SELECT post_tag.tag_id,news.*
        FROM post_tag LEFT JOIN news ON post_tag.post_id=news.id 
        WHERE post_tag.tag_id=".$tag_id;
       return $db->query($query)->fetch_all(MYSQLI_ASSOC);

    }

/*# выбрать все новости вместе с тегами
SELECT news.*,tags.* FROM post_tag LEFT JOIN news ON post_tag.post_id=news.id
LEFT JOIN tags ON post_tag.tag_id=tags.tag_id ORDER BY news.id DESC



# выбрать все новости по определенному тегу
SELECT post_tag.post_id,post_tag.tag_id FROM post_tag WHERE post_tag.tag_id=520

# выбрать новости по нескольким тегам
SELECT post_tag.post_id,post_tag.tag_id FROM post_tag WHERE post_tag.tag_id=520 OR post_tag.tag_id=20

# получить список номеров и названий тегов для определенной новости
SELECT post_tag.tag_id,tags.tag_name FROM post_tag 
LEFT JOIN tags ON post_tag.tag_id=tags.tag_id WHERE post_tag.post_id=988
*/







}