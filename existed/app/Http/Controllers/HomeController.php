<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
class HomeController extends Controller
{
    function index(){
        
        $employeeList=Employee::all();
        
        // dd($employeeList);
        return view('home.index',compact('employeeList'));
    }
}
