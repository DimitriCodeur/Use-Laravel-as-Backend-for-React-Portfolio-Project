<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    /*====================================
    Display Three Services Data
    ====================================*/
    public function onSelectThree(){
        $result = Projects::limit(3)->get();
        return $result;
    } //End Method

    /*====================================
    Display All Services Data
    ====================================*/
    public function onSelectAll(){
        $result = Projects::latest()->get();
        return $result;
    } //End Method

    /*====================================
    Post All Services Data
    ====================================*/
    public function ProjectDetails(Request $request){
        $id = $request->input('id');
        $result = Projects::where('id', $id)->get();
        return $result;
    } //End Method

}
