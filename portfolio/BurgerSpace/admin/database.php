<?php

class Database
{
private static $dbHost = "localhost";
private static $dbName = "c1330849c_burger_space" ;
private static $dbUser = "c1330849c_gabistam";
private static $dbUserPassword = "15M@trix15"; 
private static $connection = null;

   public static function connect()
    {
        try 
        {
            self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbUserPassword);
        } 
        catch (PDOException $e) 
        {
        die($e->getMessage());
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }
        
}

Database::connect();    


?>