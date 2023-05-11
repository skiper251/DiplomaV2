<?php

namespace App\services;

class Router
{
    private static $list = [];

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,//URI
            "page" => $page_name//FILE NAME
        ];
    }
    public static function post($uri,$class,$method)
    {
        self::$list[] = [
            "uri" => $uri,//URI
            "class"=> $class,
            "method" => $method,//FILE NAME
            "post" =>true
        ];
    }

    public static function enable()
    {
        $querry = $_GET['q'];
        foreach (self::$list as $route){
            if ($route["uri"] === '/'.$querry){
                if ($route["post"]===true && $_SERVER["REQUEST_METHOD"] === "POST"){
                    $action =  new $route['class'];
                    $method = $route['method'];
                    $action->$method($_POST);
                    die();
                }else{
                    require_once "views/pages/".$route['page'].".php";
                    die();
                }
            }
        }

        self::not_found_page();
    }

    public static function redirect($uri)
    {
        header('Location: ' . $uri);
    }
    private static function not_found_page()
    {
        echo "page not found";
    }
}