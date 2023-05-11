<?php

use App\services\Router;
use App\controllers\Auth;

Router::page("/","login");
Router::page("/home","home");
Router::page("/storage","storage");

Router::post('/auth/login',Auth::class,'login');

Router::enable();


