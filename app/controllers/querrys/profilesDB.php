<?php

namespace App\controllers\querrys;

use App\services\Router;

class profilesDB
{
    public static function add($data)
    {
        $bean = \R::dispense('profiles');
        $bean ->ownerphonenumber = $data['ownerPhoneNumber'];
        $bean ->ownername = $data["ownerName"];
        $bean ->ownersurname = $data["ownerSurname"];
        $bean ->petname = $data["petName"];
        $bean ->pettype = $data["petType"];
        $bean ->petbreed = $data["petBreed"];
        $bean ->petweight = $data["petWeight"];
        $bean ->petage = $data["petAge"];
        $bean ->petvaccine = $data["petVaccine"];
        $bean ->lastproblem = $data["lastProblem"];
        \R::store($bean);
        Router::redirect('/createProfile');
    }
}