<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Animal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::where('deleted_at', null)->get();

        return view('/maintenance/animal', ['animals'=>$animals]);
    }

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

    public function destroy($id)
    {
        //
    }
}
