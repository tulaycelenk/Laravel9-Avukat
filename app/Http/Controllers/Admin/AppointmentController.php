<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments=Appointment::all();
        return view('admin.appointment.index',[
            'appointments' => $appointments
        ]);
    }

    public function approve(Appointment $appointment, $id){
        $appointment=Appointment::find($id);
        $appointment->payment="Approved";
        $appointment->save();

        $appointments=Appointment::all();
        return view('admin.appointment.index',[
            'appointments' => $appointments
        ]);
    }
    public function decline(Appointment $appointment, $id){
        $appointment=Appointment::find($id);
        $appointment->payment="Declined";
        $appointment->save();

        $appointments=Appointment::all();
        return view('admin.appointment.index',[
            'appointments' => $appointments,
        ]);
    }

    public function cancel(Appointment $appointment, $id){
        $appointment=Appointment::find($id);
        $appointment->delete();

        $appointmentsForUser=Appointment::all();
        $categories=Category::Where('parentid', 0)->get();
        return view('home.gather.myAppointments',[
            'appointmentsForUser' => $appointmentsForUser,
            'categories' => $categories
        ]);
    }

}
