<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Animal;
use App\Model\Pet;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddPetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user') && $request->session()->get('user')==0) {
            $animals = Animal::where('deleted_at', null)->get();
            return view('client/addpet', ['animals'=>$animals])->with('userFirstName',$request->session()->get('userFirstName'));
        }else{
            return redirect('main/homepage');
        }
        
    }

    public function store(Request $request)
    {
        try {
            
            
            $pet = new Pet;

            $pet->strPetName = $request->petName;
            $pet->strDescription = $request->description;
            $pet->intAnimalID = $request->animal;
            $pet->intBreedID = $request->breed;
            $pet->intUserID = $request->session()->get('userID');

            $pet->save();

            return redirect('/client/viewpets')->with('message', 'Pet Added.');
            
        } catch (Exception $e) {
            
        }
    }

}
