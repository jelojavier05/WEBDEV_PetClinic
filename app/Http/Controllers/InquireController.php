<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Appointment;
use App\Model\Pet;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InquireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user') && $request->session()->get('user')==0) {
            $pets = Pet::where('intUserID', $request->session()->get('userID'))->get();
            
            return view('client/inquire')
                ->with('userFirstName',$request->session()->get('userFirstName'))
                ->with(['pets'=>$pets]);
        }else{
            return redirect('main/homepage');
        }
    }

    public function store(Request $request)
    {
        try {
            
            
            $appointment = new Appointment;

            $appointment->dateAppointment = $request->dateAppointment;
            $appointment->intTime = $request->time;
            $appointment->intUserID = $request->session()->get('userID');
            $appointment->intPetID = $request->petName;

            $appointment->save();
                
            return redirect('client/inquire')->with('message', '1');

        } catch (Exception $e) {
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
