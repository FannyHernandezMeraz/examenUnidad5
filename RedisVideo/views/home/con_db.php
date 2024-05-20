<?php


        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "RedisVideo";
        $film_id = 0;

        $conex = mysqli_connect($hostname, $username, $password, $database);
        $conex->set_charset("utf8");

        if (mysqli_connect_errno()) {
            echo "Fail connection" . mysqli_connect_error();
            die();
        } else {
            //echo password_hash("admin", PASSWORD_DEFAULT);
            echo "hola";
        }

        return $conex;
   
//$conex = mysqli_connect("localhost", "root", "root", "RedisVideo");

?>