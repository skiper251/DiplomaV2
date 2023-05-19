<?php

namespace App\controllers;

use App\services\Router;

class Db
{
    public static function update($data)
    {
        var_dump($data);
        $bean = \R::dispense('storage');
        $bean ->item_id = $data["item_id"];
        $bean ->count = $data["count"];
    }
    public static function add($data)
    {
        var_dump($data);
        $bean = \R::dispense('storage');
        $bean ->item_id = $data["item_id"];
        $bean ->count = $data["count"];
        $idbean = \R::store($bean);
        var_dump($idbean);
        Router::redirect('/storage');
    }
    public static function delete($data)
    {
        $key = array_keys($data);
        $id = $key[0];
        $find = \R::findOne('storage', 'id = ?',[$id]);
        $delete = \R::load('storage', $find->id);
        \R::trash($delete);
        Router::redirect('/storage');
    }
}