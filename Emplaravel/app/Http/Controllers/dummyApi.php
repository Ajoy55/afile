<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApi extends Controller
{
    
    function getData()
    {
            return ["name"=>"Raj","email" => "raj@gmail.com","address" => "Kolkata"];

    }


}
