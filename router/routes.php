<?php

use App\services\Router;
use App\controllers\Auth;
use App\controllers\Db;

Router::page("/","login");
Router::page("/home","home");
Router::page("/storage","storage");

Router::post('/auth/login',Auth::class,'login');
Router::post('/auth/logout',Auth::class,'logout');
Router::post('/db/update',Db::class,'update');


Router::enable();


