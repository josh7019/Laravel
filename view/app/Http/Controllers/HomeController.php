<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $userName="josh";
        $line="line1<br>line2<br>line3<br>";
        $scoreList=[100,80,30,58,63];
        $cityId=4;
        $viewModel=compact('userName','line','scoreList','cityId');
         return view('Home.index',$viewModel);
        
    }
    function page2(){
        return view('Home.page2');
    }
    function page3(){
        return view('Home.page3');
    }
}
