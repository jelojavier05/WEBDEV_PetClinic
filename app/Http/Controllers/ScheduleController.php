<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Schedule;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    
    public function index(Request $request)
    {
        
        if ($request->session()->has('user') && $request->session()->get('user')==1) {
            $schedules = Schedule::where('deleted_at', null)->get();

            return view('/maintenance/schedule', ['schedules'=>$schedules]);
        }else{
            return redirect('main/homepage');
        }
        
    }

    
    public function store(Request $request)
    {
        try {
            $checker = true;
            $schedule = Schedule::get();
            
            foreach($schedule as $result){
                if ($result->strDay == $request->dayAdd){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                $schedule = new Schedule;

                $schedule->strDay = $request->dayAdd;
                $schedule->intFrom = $request->fromAdd;
                $schedule->intTo = $request->toAdd;
                $schedule->save();
                
                return redirect('maintenance/schedule')->with('message', 'Record Added.');
            }else{
                return redirect('maintenance/schedule')->with('message', 'Record Exist.');
            }

            
        } catch (Exception $e) {
            
        }
    }

    
    public function update(Request $request)
    {
        try {
            
            $checker = true;
            $schedule = Schedule::get();
            
            foreach($schedule as $result){
                if ($result->strDay == $request->dayEdit && $result->intScheduleID != $request->idEdit){
                    $checker = false;
                    break;
                }
            }
            
            if ($checker){
                Schedule::where('intScheduleID', $request->idEdit)
                    ->update(['strDay'=>$request->dayEdit,
                             'intFrom'=>$request->fromEdit,
                             'intTo'=>$request->toEdit]);
                
                return redirect('maintenance/schedule')->with('message', 'Record Updated.');
            }else{
                return redirect('maintenance/schedule')->with('message', 'Record Exist.');
            }
        } catch (Exception $e) {
            
        }    
    }

    
    public function destroy(Request $request)
    {
        Schedule::destroy($request->idDelete);
        
        return redirect('maintenance/schedule')->with('message', 'Record Deleted.');
    }
}
