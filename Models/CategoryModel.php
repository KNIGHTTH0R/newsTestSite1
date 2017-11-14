<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 06.11.2017
 * Time: 15:10
 */

class CategoryModel
{
    private $id;
    private $name;
    private $description;
    private $parent;

    const TABLE='category';

    public function __construct($name='',$parent='',$description='')
    {
        $this->name=$name;
        $this->parent=$parent;
        $this->description=$description;
    }

    private function createCat()
    {
        $db=DB::getInstance();
        $query="INSERT INTO `".self::TABLE."` SET
        `name`='".$this->name."',
        `parent`='".$this->parent."',
        `description`='".$this->description."'
        ";
        $db->query($query);
        return (!$this->id=$db->insert_id)?false:true;
    }
    private function updateCat(){}
    public function deleteCat(){}
    public function saveCat(){}

    public static function getCats($order='id',$pos='ASC')
    {
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::TABLE."` ORDER BY `".$order."` ".$pos;
        return $db->query($query)->fetch_all(MYSQLI_ASSOC);
    }




}