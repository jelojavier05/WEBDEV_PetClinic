<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\GroomService;
use App\Model\MedicalService;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OfferedServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user')) {
            
            if ($request->session()->get('user') == 1){
                return redirect('maintenance/appointments');
            }else{
                return redirect('client/clientmain');
            }   
        }else{
            $medicalservices = MedicalService::where('deleted_at', null)->get();
            $groomservices = GroomService::where('deleted_at', null)->get();
            return view('/main/offeredservices')->with('medicalservices', $medicalservices)->with ('groomservices', $groomservices);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
