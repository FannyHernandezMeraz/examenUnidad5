<?php
session_name("RedisVideo");
session_start();

if (empty($_SESSION["email"])) {
    require_once("controllers/login.php");
    exit();
}

require_once("controllers/home.php");
exit();