<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return view('home.index');
    }
    function sayhello(Request $request){
        $who=$request->userName;
        $value=101;
        // return view("home.hello",["who"=>$request->userName,"value"=>100]);
        // return view("home.hello",compact('who','value'));
        return view("home.hello")->withWho($request->userName)->withvalue(100);
    }
}
