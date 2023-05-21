<?php

namespace App\controllers\querrys;

use App\services\Router;

class storageDB
{
    public static function add($data)
    {
        var_dump($data);
        $bean = \R::dispense('storage');
        $bean ->item_id = $data["item_id"];
        $bean ->count = $data["count"];
        //$idbean = \R::store($bean);
        //Router::redirect('/storage');
    }
    public static function delete($data)
    {
        var_dump($data);
        $key = array_keys($data);
        $id = $key[0];
        $find = \R::findOne('storage', 'id = ?',[$id]);
        $delete = \R::load('storage', $find->id);
        \R::trash($delete);
        Router::redirect('/storage');
    }
}