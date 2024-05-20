<?php

class Connect
{
    public static function connection()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "RedisVideo";

        $connection = mysqli_connect($hostname, $username, $password, $database);
        $connection->set_charset("utf8");

        if (mysqli_connect_errno()) {
            echo "Fail connection" . mysqli_connect_error();
            die();
        } else {
            //echo password_hash("admin", PASSWORD_DEFAULT);
            include("views/home/vista.php");
        }

        return $connection;
    }
}