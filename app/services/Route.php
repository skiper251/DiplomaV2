<?php

namespace App\services;

class Route
{
    private static $list = [];

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable()
    {
        $querry = $_GET['q'];
        foreach (self::$list as $route){
            if ($route["uri"] === '/'.$querry){
                require_once "views/pages/".$route['page'].".php";
            }
        }
    }
}