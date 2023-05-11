<?php

namespace App\controllers;

use App\services\Router;

class Auth
{
    public static function login($data)
    {
        $uname = $data['uname'];
        $password = $data['password'];

        $user = \R::findOne('users', 'user_name = ?', [$uname]);
        if (empty($uname)) {
            header("Location: ../../?error=User Name is required");
            exit();
        } else if (empty($password)) {
            header("Location: ../../?error=User Password is required");
            exit();
        } else {
            if ($user['user_name'] === $uname && $user['password'] === $password) {
                session_start();
                $_SESSION['user_name'] = $user['user_name'];//онменять нейм и юзер нейм на нормальніе слова тут и в БД todo
                $_SESSION['name'] = $user['name'];
                $_SESSION['id'] = $user['id'];
                Router::redirect('/home');
            } else {
                header("Location:../../?error=Incorrect User name or password");
                exit();
            }
        }
    }
}
