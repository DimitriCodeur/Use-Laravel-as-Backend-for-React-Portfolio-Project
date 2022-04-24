<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    /*====================================
    Display All Footer Data
    ====================================*/
    public function onSelectAll(){
        $result = Footer::all();
        return $result;
    } //End Method
}
