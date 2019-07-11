<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    //
    function show($id,$name){
        return $id.":".$name;
    }
    function index(){
        return "ok";
    }
    function param(REQUEST $r){
        return $r->data;
    }

    function getform(){
        return view('lab.aform');
    }
    function postform(REQUEST $r){
        
        return $r->id.':'.$r->firstName;
    }
    function xml(){
        $content="<book><title>ooo</title><price>500</price></book>";
        return response(
            $content,200,["content-type"=>"text/xml"]
        );
    }
    function json(){
        $content='{"key":"value"}';
        return response(
            $content,200,["content-type"=>"text/json"]
        );
    }
    function memberOnly(){
        return redirect('/lab/form');
    }
}
