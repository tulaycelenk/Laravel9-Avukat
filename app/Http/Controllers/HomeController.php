<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $slider=Service::limit(3)->get();

        //for navbar
        $categories=Category::Where('parentid', 0)->get();
        $categoriesForCategoryCard=Category::limit(3)->get();
        return view('home.gather.index',['slider'=>$slider, 'categories' => $categories, 'categoriesForCategoryCard' => $categoriesForCategoryCard]);
    }
    public function contact(){
        return view('home.gather.contact');
    }
    public function faq(){
        return view('home.gather.faq');
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
    public function categoryListPage($id){
        //for navbar
        $categories=Category::Where('parentid', 0)->get();
        $services=Service::Where('category_id', $id)->get();
        return view('home.gather.serviceList', ['categories' => $categories, 'services' => $services]);
    }
    public function serviceDetailPage($id){
        //for navbar
        $categories=Category::Where('parentid', 0)->get();
        $service=Service::Where('id', $id)->get()[0];
        return view('home.gather.serviceDetail', ['categories' => $categories, 'service' => $service]);
    }
    public function loginuser(){
        //navbar
        $categories=Category::Where('parentid', 0)->get();
        return view("home.gather.login", [
            'categories' => $categories
        ]);
    }
    public function logoutuser(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function requestForAppointment(Request $request){
        //dd($request);
        $appointment=new Appointment();
        $appointment->userid=$request->customerId;
        $appointment->service_id=$request->service_id;
        $appointment->lawyer_id=$request->lawyerId;
        $appointment->date=$request->date;
        $appointment->time=0;
        $appointment->payment="Not Approved";
        $appointment->save();

        $service=Service::Where('id', $request->service_id)->get()[0];
        $categories=Category::Where('parentid', 0)->get();
        return view('home.gather.serviceDetail', ['categories' => $categories, 'service' => $service]);

    }
    public function save(){
        echo "Save Function";
        echo "name :", $_REQUEST["fname"];
        echo "surname :", $_REQUEST["lname"];

    }
}


















