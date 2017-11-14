<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 09.11.2017
 * Time: 20:11
 */

class CommentModel
{
    private $id;
    private $text;
    private $author;
    private $parent_comment;
    private $raiting;

    const COMMENT_TABLE_NAME='comment';












    public function getAllComments()
    {
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::COMMENT_TABLE_NAME."`";
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * @param $post_id
     * @return bool|mixed
     * ----------------------------------------
     *Search all comments by $post_id
     * Return:
     * 1 ====> array with comments
     *             OR
     * 2 =====> false
     *         if that post is available
     *-------------------------------------------
     */
    public function getAllCommentsByPost($post_id)
{
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::COMMENT_TABLE_NAME."` WHERE `post_id`=".$post_id;
        $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);

        return $res;
}


    public function createComment($post_id,$auth_id,$text)
    {
        $query="INSERT INTO `".self::COMMENT_TABLE_NAME."` 
        SET `post_id`=".$post_id.",
        `author`=".$auth_id.",
        `text`='".$text."'
        ";
        $db=DB::getInstance();
        $db->query($query);
        return(!$id=$db->insert_id)?false:true;
        #INSERT INTO `comment` (`id`, `text`, `author`, `parent_comment`, `rating`, `post_id`, `time_create`)
        #VALUES (NULL, 'adasdasdasdasdaad', '12', '0', '0', '12', CURRENT_TIMESTAMP);
    }








}