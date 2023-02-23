<?php
 
 class Adatbazis 
 {
    private static $kapcsolat;

    public static function csatlakoz()
    {
        $db_host = "localhost";
        $db_user = "merszol-user";
        $db_password = "123456";
        $db_database= "merszol-db";

        self::$kapcsolat = mysqli_connect(
            $db_host,
            $db_username,
            $db_password,
            $db_database,
          );
    }

 }






?>