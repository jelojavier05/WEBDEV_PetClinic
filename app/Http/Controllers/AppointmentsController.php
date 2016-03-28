<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Appointment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user') && $request->session()->get('user')==1) {
            $appointments = Appointment::where('intStatus', 1)->get();
            
            return view('/maintenance/appointments',['appointments'=>$appointments]);
        }else{
            return redirect('main/homepage');
        }
        
    }

    public function approved(Request $request){
        try{
            
            Appointment::where('intAppointmentID', $request->appointmentID)
                ->update(['intStatus'=>2]);

            return redirect('maintenance/appointments')->with('message', '1');
        }catch(Exception $e){
            
        }
    }
    
    public function declined(Request $request)
    {
        try{
            
            Appointment::where('intAppointmentID', $request->appointmentID)
                ->update(['intStatus'=>0]);

            return redirect('maintenance/appointments')->with('message', '0');
        }catch(Exception $e){
            
        }
    }
}
