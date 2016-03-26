<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MedicalService;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MedicalServiceController extends Controller
{
    
    public function index()
    {
        
        $medicalservices = MedicalService::where('deleted_at', null)->get();

        return view('/maintenance/medicalService', ['medicalservices'=>$medicalservices]);
    }

    
    public function store(Request $request)
    {
        try {
            $checker = true;
            $medicalservice = MedicalService::get();
            
            foreach($medicalservice as $result){
                if ($result->strMedicalService == $request->medicalServiceAdd){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                $medicalservice = new MedicalService;

                $medicalservice->strMedicalService = $request->medicalServiceAdd;
                $medicalservice->strDescription = $request->descriptionAdd;
                $medicalservice->fltPrice = $request->priceAdd;
                
                $medicalservice->save();
                
                return redirect('maintenance/medicalservice')->with('message', 'Record Added.');
            }else{
                return redirect('maintenance/medicalservice')->with('message', 'Record Exist.');
            }

            
        } catch (Exception $e) {
            
        }
    }

    
    public function update(Request $request)
    {
        try {
            
            $checker = true;
            $medicalservice = MedicalService::get();
            
            foreach($medicalservice as $result){
                if ($result->strMedicalService == $request->nameEdit && $result->intMedicalServiceID != $request->idEdit){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                MedicalService::where('intMedicalServiceID', $request->idEdit)
                    ->update(['strMedicalService'=>$request->nameEdit,
                             'strDescription'=>$request->descriptionEdit,
                             'fltPrice'=>$request->priceEdit]);
                
                return redirect('maintenance/medicalservice')->with('message', 'Record Updated.');
            }else{
                return redirect('maintenance/medicalservice')->with('message', 'Record Exist.');
            }
        } catch (Exception $e) {
            
        }    
    }

    public function destroy($id)
    {
        //
    }
}
