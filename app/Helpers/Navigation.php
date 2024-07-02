<?php

namespace App\Helpers;

use App\Models\Navigation as ModelsNavigation;

class Navigation{
    public static function getLinks(){
        return ModelsNavigation::get();
    }
}
