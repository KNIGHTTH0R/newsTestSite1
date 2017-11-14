<?php


class UserModel
{
    private $id;
    private $login;
    private $pass;
    private $email;
    private $role;
    private $privilege;
    private $created_at;
    private $avatar;
    const USER_TABLENAME='user';

    public function __construct($email='',$pass='')
    {

        $this->pass=$pass;
        $this->email=$email;
    }

    public function createUser()
    {
        $db=DB::getInstance();
        $query="
        INSERT INTO `".self::USER_TABLENAME."` ( `pass`, `email`, `role`, `privilege`, `avatar`, `created_at`)
        VALUES ( '".$this->pass."', '".$this->email."', '0', '0', 'no-image.png', CURRENT_TIMESTAMP)";
        $db->query($query);
        if(!$id=$db->insert_id)return false;
        $this->id=$id;
        return true;

    }



    public function userExist($email,$type='bool')
    {
        $db=DB::getInstance();
        $query="SELECT * FROM `".self::USER_TABLENAME."` WHERE  `email`='".$email."'";
        $res=$db->query($query);
        if($type==='bool')return $db->affected_rows;
        return $res->fetch_assoc();
    }

    public function registerUser()
    {
        if($this->userExist($this->email))die("User exists");
        return $this->createUser();
    }



    public function loginUser()
    {
        $user=$this->userExist($this->email,'asda');
    if(!$user || $user['pass']!==$this->pass)return false;
    return $user;


    }



    public function getLogin(){

        return $this->email;

    }




}