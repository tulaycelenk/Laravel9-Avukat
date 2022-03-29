<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function test(){
        return view('home.test');
    }
    public function param($id,$number){
        echo "parameter is: ",$id;
        echo "<br>second parameter is: ",$number;

        return view('home.test');
    }
    public function save(){
        echo "Save Function";
        echo "name :", $_REQUEST["fname"];
        echo "surname :", $_REQUEST["lname"];

    }
}


















