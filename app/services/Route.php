<?php

namespace App\services;

class Route
{
    private static $list = [];

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,//URI
            "page" => $page_name//FILE NAME
        ];
    }

    public static function enable()
    {
        $querry = $_GET['q'];
        foreach (self::$list as $route){
            if ($route["uri"] === '/'.$querry){
                require_once "views/pages/".$route['page'].".php";
                die();
            }
        }
        self::not_found_page();
    }
    private static function not_found_page()
    {
        echo "page not found";
    }
}