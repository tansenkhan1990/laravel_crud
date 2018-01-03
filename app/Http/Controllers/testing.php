<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    public function test($name,$address)
    {
        echo "welcome $name and you are from $address";
    }
}
