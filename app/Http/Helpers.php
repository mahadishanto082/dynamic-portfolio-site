<?php

use App\Models\Category;
use App\Models\Setting;
use App\Models\Order;
use App\Models\UserPoint;



if (!function_exists('getSetting')) {
    function getSetting() {
       return Setting::first();
    }
}




