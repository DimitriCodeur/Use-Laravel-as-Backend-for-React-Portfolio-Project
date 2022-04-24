<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;

class HomePageEtcController extends Controller
{
    /*====================================
    Display Video And Home Page Data
    ====================================*/
    public function SelectVideo(){
        $result = HomePage::select('video_description', 'video_url')->get();
        return $result;
    } //End Method

    /*====================================
    Display Total Home Page Data
    ====================================*/
    public function SelectTotalHome(){
        $result = HomePage::select('total_student', 'total_course', 'total_review')->get();
        return $result;
    } //End Method

    /*====================================
    Display Total Home Page Data
    ====================================*/
    public function SelectTechHome(){
        $result = HomePage::select('tech_description')->get();
        return $result;
    } //End Method

     /*====================================
    Display Home Title Data
    ====================================*/
    public function SelectHomeTitle(){
        $result = HomePage::select('home_title', 'home_subtitle')->get();
        return $result;
    } //End Method

}
