<?php

use App\services\App;

require_once  __DIR__ . "/vendor/autoload.php";
session_start();
App::start();

require_once  __DIR__ . "/router/routes.php";

