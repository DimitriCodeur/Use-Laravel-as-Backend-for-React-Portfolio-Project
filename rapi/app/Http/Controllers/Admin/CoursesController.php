<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    /*====================================
    Display Four Courses
    ====================================*/
    public function onSelectFour(){
        $result = Courses::limit(4)->get();
        return $result;
    } //End Method

    /*====================================
    Display All Courses
    ====================================*/
    public function onSelectAll(){
        $result = Courses::all();
        return $result;
    } //End Method

    /*====================================
    Post Course Details Data
    ====================================*/
    public function onSelectDetails(Request $request){
        $id = $request->input('id');
        $result = Courses::where('id', $id)->get();
        return $result;
    } //End Method

}
