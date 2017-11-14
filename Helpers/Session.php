<?php
/**
 * Created by PhpStorm.
 * User: dest2r4
 * Date: 07.11.2017
 * Time: 12:54
 */

class Session
{
    public function __construct()
    {
        if(isset($_COOKIE['session_id']))
        {
            session_id($_COOKIE['session_id']);
            session_start();
        }
        else {
            session_start();
            setcookie('session_id', session_id());
        }
    }

    public function setSession($key,$value)
    {
        if(!$key) return false;
        $_SESSION[$key]=$value;
        return true;

    }

    public function getSession($key,$default=NULL)
    {
        return (isset($_COOKIE[$key]))?$_COOKIE[$key]:$default;
    }

    public function unsetSession($key)
    {
        session_destroy();
    }


}