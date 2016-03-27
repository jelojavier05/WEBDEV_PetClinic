<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user') && $request->session()->get('user')==0) {
            $userinfo = UserInfo::find($request->session()->get('userID'));
            return view('client/editdetails')
                ->with('userFirstName',$request->session()->get('userFirstName'))
                ->with('userinfo', $userinfo);
        }else{
            return redirect('main/homepage');
        }
    }

  
    public function update(Request $request)
    {
        try {
            
            UserInfo::where('intUserInfoID', $request->session()->get('userID'))
                ->update(['strFirstName'=>$request->firstName,
                          'strLastName'=>$request->lastName,
                          'strAddress'=>$request->address,
                          'strContactNumber'=>$request->contactNumber]);
            $request->session()->put('userFirstName', $request->firstName);
            return redirect('client/editdetails')->with('message', 'Record Updated.');
            
        } catch (Exception $e) {
            
        }    
    }

}
