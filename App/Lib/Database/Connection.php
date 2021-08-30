<?php
    abstract class Connection
    {
        private static $conn;
        
        public static function getConn(){
            
            if(self::$conn == NULL){
                self::$conn = new PDO('mysql: host=localhost; dbname=crud_db;','root','');
            }
            return self::$conn;
        }
    }