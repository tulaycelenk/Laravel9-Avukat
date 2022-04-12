<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.gather.index');
    }
    public function contact(){
        return view('home.gather.contact');
    }
    public function about(){
        return view('home.gather.about');
    }
    public function service(){
        return view('home.gather.practice');
    }
    public function team(){
        return view('home.gather.attorneys');
    }
    public function single(){
        return view('home.gather.single');
    }
    public function portfolio(){
        return view('home.gather.studies');
    }
    public function blog(){
        return view('home.gather.blog');
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


















