<?php

use App\controllers\Auth;
use App\controllers\querrys\storageDB;
use App\controllers\querrys\profilesDB;
use App\services\Router;

Router::page("/","login");
Router::page("/home","home");
Router::page("/storage","storage");
Router::page("/createProfile","createProfile");
Router::page("/viewProfile","viewProfile");

Router::post('/auth/login',Auth::class,'login');
Router::post('/auth/logout',Auth::class,'logout');

Router::post('/storagedb/add',storageDB::class,'add');
Router::post('/storagedb/delete',storageDB::class,'delete');

Router::post('/profilesDB/add',profilesDB::class,'add');




Router::enable();


