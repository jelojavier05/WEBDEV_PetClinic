<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\GroomService;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroomServiceController extends Controller
{
    
    public function index()
    {
        $groomservices = GroomService::where('deleted_at', null)->get();

        return view('/maintenance/groomservice', ['groomservices'=>$groomservices]);
    }

    
    public function store(Request $request)
    {
        try {
            $checker = true;
            $groomservice = GroomService::get();
            
            foreach($groomservice as $result){
                if ($result->strGroomService == $request->nameAdd){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                $groomservice = new GroomService;

                $groomservice->strGroomService = $request->nameAdd;
                $groomservice->strDescription = $request->descriptionAdd;
                $groomservice->fltPrice = $request->priceAdd;
                
                $groomservice->save();
                
                return redirect('maintenance/groomservice')->with('message', 'Record Added.');
            }else{
                return redirect('maintenance/groomservice')->with('message', 'Record Exist.');
            }

            
        } catch (Exception $e) {
            
        }
    }

    
    public function update(Request $request)
    {
        try {
            
            $checker = true;
            $groomservice = GroomService::get();
            
            foreach($groomservice as $result){
                if ($result->strGroomService == $request->nameEdit && $result->intGroomServiceID != $request->idEdit){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                GroomService::where('intGroomServiceID', $request->idEdit)
                    ->update(['strGroomService'=>$request->nameEdit,
                             'strDescription'=>$request->descriptionEdit,
                             'fltPrice'=>$request->priceEdit]);
                
                return redirect('maintenance/groomservice')->with('message', 'Record Updated.');
            }else{
                return redirect('maintenance/groomservice')->with('message', 'Record Exist.');
            }
        } catch (Exception $e) {
            
        }    
    }

    
    public function destroy(Request $request)
    {
        GroomService::destroy($request->idDelete);
        
        return redirect('maintenance/groomservice')->with('message', 'Record Deleted.');
    }
}
