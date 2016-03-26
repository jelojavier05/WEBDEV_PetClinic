<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Animal;
use App\Model\Breed;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BreedController extends Controller
{
    
    public function index()
    {   
        $animals = Animal::where('deleted_at', null)->get();
        $breeds = Breed::where('deleted_at', null)->get();
        
        return view('/maintenance/breed')->with ('animals', $animals)->with ('breeds', $breeds);
    }

    public function store(Request $request)
    {
        try {
            $checker = true;
            $breeds = Breed::get();
            
            foreach($breeds as $result){
                if ($result->strBreedName == $request->nameAdd && 
                    $result->intAnimalID == $request->animalTypeIDAdd){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                $breeds = new Breed;

                $breeds->strBreedName = $request->nameAdd;
                $breeds->intAnimalID = $request->animalTypeIDAdd;
                
                $breeds->save();
                
                return redirect('maintenance/breed')->with('message', 'Record Added.');
            }else{
                return redirect('maintenance/breed')->with('message', 'Record Exist.');
            }

            
        } catch (Exception $e) {
            
        }
    }

    
    
    public function update(Request $request)
    {
        try {
            
            $checker = true;
            $breeds = Breed::get();
            
            foreach($breeds as $result){
                if ($result->strBreedName == $request->nameEdit && 
                    $result->intAnimalID == $request->animalTypeIDEdit &&
                    $result->intBreedID != $request->idEdit){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                Breed::where('intBreedID', $request->idEdit)
                    ->update(['strBreedName'=>$request->nameEdit,
                             'intAnimalID'=>$request->animalTypeIDEdit]);
                
                return redirect('maintenance/breed')->with('message', 'Record Updated.');
            }else{
                return redirect('maintenance/breed')->with('message', 'Record Exist.');
            }
        } catch (Exception $e) {
            
        }    
    }

   
    public function destroy(Request $request)
    {
        Breed::destroy($request->idDelete);
        
        return redirect('maintenance/breed')->with('message', 'Record Deleted.');
    }
}
