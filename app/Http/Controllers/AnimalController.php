<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Animal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::where('deleted_at', null)->get();

        return view('/maintenance/animal', ['animals'=>$animals]);
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
        try {
            $checker = true;
            $animals = Animal::get();
            
            foreach($animals as $result){
                if ($result->strAnimalName == $request->animal){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                $animal = new Animal;

                $animal->strAnimalName = $request->animal;

                $animal->save();
                
                return redirect('maintenance/animal')->with('message', 'Record Added.');
            }else{
                return redirect('maintenance/animal')->with('message', 'Record Exist.');
            }

            
        } catch (Exception $e) {
            
        }
        
    }

    public function update(Request $request)
    {
        try {
            
            $checker = true;
            $animals = Animal::get();
            
            foreach($animals as $result){
                if ($result->strAnimalName == $request->nameEdit && $result->intAnimalID != $request->idEdit){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                Animal::where('intAnimalID', $request->idEdit)
                    ->update(['strAnimalName'=>$request->nameEdit]);
                
                return redirect('maintenance/animal')->with('message', 'Record Updated.');
            }else{
                return redirect('maintenance/animal')->with('message', 'Record Exist.');
            }
        } catch (Exception $e) {
            
        }    
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
