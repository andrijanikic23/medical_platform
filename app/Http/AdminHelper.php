<?php

namespace App\Http;

use function Symfony\Component\String\b;

class AdminHelper {

    public static function displayButtonRole($role){

        return match($role) {
            "patient" => "staff",
            "staff" => "patient"
        };

    }


}
