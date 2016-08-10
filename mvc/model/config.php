<?php
class Database
{
    private static $dbName = 'universidad' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'postgres';
    private static $dbUserPassword = '1234';
    private static $port = '5435';      
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "pgsql:host=".self::$dbHost.";"."port=".self::$port.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>