<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user') && $request->session()->get('user')==0) {

            return view('client/changepassword')->with('userFirstName',$request->session()->get('userFirstName'));
        }else{
            return redirect('main/homepage');
        }
        

    }

    public function update(Request $request)
    {
        try{
            if ($request->newPassword == $request->confirmPassword){

                User::where('intUserID', $request->session()->get('userID'))
                    ->update(['strPassword'=>$request->newPassword]);
                return redirect('client/changepassword')->with('message', '1');
            }else{
                return redirect('client/changepassword')->with('message', '0');
            }
        }catch(Exception $e){
            
        }
    }
}
