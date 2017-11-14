<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 07.11.2017
 * Time: 19:36
 */

class OnlineViewModel
{
    const TABLE='online';

    public function deleteData()
    {
        $time=time()-10;
        $db=DB::getInstance();
        $query="DELETE FROM `".self::TABLE."` WHERE `time`<".$time;
        $db->query($query);
    }

    public function getOnline($sess_id,$url)
    {

        $db=DB::getInstance();
        $this->deleteData();
        $query="SELECT * FROM `".self::TABLE."` WHERE `session_id`='".$sess_id."'";
        $res=$db->query($query)->fetch_all(MYSQLI_ASSOC);
        /*echo "<pre>";
        die(var_dump($res));*/
        $time=time();
        @$count=mysqli_num_rows($res);
        if($count ==NULL)$db->query("INSERT INTO `".self::TABLE."`(session_id,time,now_url) VALUES('".$sess_id."','".$time."','".$url."') ");
        else $db->query("UPDATE `".self::TABLE."` SET `now_url`='".$url."' WHERE `session_id`='".$sess_id."'");
        $countUser=$db->query("SELECT * FROM `".self::TABLE."` WHERE `now_url`='".$url."'");
        $countUser=mysqli_num_rows($countUser);
        return $countUser;

    }



}