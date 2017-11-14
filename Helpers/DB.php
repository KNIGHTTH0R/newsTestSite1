<?php




class DB
{
        private static $db;
        private function __construct(){}
        private function __clone(){}

        public static function getInstance()
        {
            if(!self::$db)
            {
                $db=new mysqli('localhost','root','','phpacad');
                if($err=$db->connect_error)
                {
                    throw new Exception($err);
                }
                return self::$db=$db;
            }
            return self::$db;
}












}