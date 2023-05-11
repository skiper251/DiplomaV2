<?php

namespace App\services;

class App
{
    public static function start()
    {
        self::libs();
        self::db();
        self::isLogin();
    }

    public static function isLogin()
    {
        if ($_SERVER["REQUEST_URI"] != '/'&& !$_SESSION["user"]) {
            \App\services\Router::redirect('/');
        }
    }
    public static function libs()
    {
        $config = require_once "config/app.php";
        foreach ($config['libs'] as $lib){
            require_once  "libs/" . $lib . ".php";
        }

    }
    public static function db()
    {
        $config = require_once "config/db.php";
        if($config['enable']){
            \R::setup( 'mysql:host=' . $config["host"] . ';port=' . $config["port"] . ';dbname=' . $config["db_name"] . '',
                $config["username"], $config["password"] ); //for both mysql or mariaDB
            if (!\R::testConnection()){
                die('Error DB connection');
            }
        }

    }
}