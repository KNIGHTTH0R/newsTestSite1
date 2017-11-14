<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 07.11.2017
 * Time: 13:04
 */

class ViewModel
{
    private $url;
    private $number;
    const TABLE='count_all';

    public function __construct()
    {

    }

    public function checkPage($url)
    {
        $query="SELECT * FROM `".self::TABLE ."` WHERE `url`='".$url."'";
        $db=DB::getInstance();
        $res=$db->query($query)->num_rows;
        return (bool)$res;
    }


    public function addPage($url)
    {
        $db=DB::getInstance();
        $query="INSERT INTO `".self::TABLE."` SET `url` ='".$url."', `number` =1 ";
         $db->query($query);

    }
    public function updatePage($url)
    {
        $db=DB::getInstance();
        $queryN="SELECT * FROM ".self::TABLE." WHERE `url`='".$url."'";
        $res=$db->query($queryN)->fetch_assoc();
        $res['number']=(int)$res['number'];
        $res['number']++;
        $queryRes="UPDATE `".self::TABLE."` SET `number`=".$res['number']." WHERE `".self::TABLE."`.`url`='".$res['url']."'";
        $db->query($queryRes);

    }


    public function getNumberVisits($url)
    {
        $db=DB::getInstance();
        $queryN="SELECT * FROM ".self::TABLE." WHERE `url`='".$url."'";
        $res=$db->query($queryN)->fetch_assoc();
        $res['number']=(int)$res['number'];
        return $res['number'];
    }


    public function changeData($url)
    {
        return($this->checkPage($url))?$this->updatePage($url):$this->addPage($url);
    }







}