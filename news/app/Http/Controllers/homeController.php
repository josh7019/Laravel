<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\News;
class homeController extends Controller
{
    function index(){
         $newsList=News::all();
        $color_class=["success","active","info","warning","danger"];
        return view("home.index",compact('newsList','color_class'));
    }
}
