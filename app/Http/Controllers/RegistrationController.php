<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    
    public function index()
    {
        return view('/main/register');
    }

    
    public function store(Request $request)
    {
        try {
            $checker = true;
            if ($request->passwordAdd != $request->confirmpasswordAdd){
                $checker = false;
                return redirect('account/register')->with('message', 'Password do not match.');
            }
            
            
            $users = User::get();
            
            foreach($users as $result){
                if ($result->strUserName == $request->usernameAdd){
                    $checker = false;
                    break;
                }
            }
            
            $usersInfo = UserInfo::get();
            if ($checker){
                foreach($usersInfo as $result){
                    if ($result->strEmail == $request->emailAdd){
                        $checker = false;
                        break;
                    }
                }
            }
            
            if ($checker){
                $user = new User;

                $user->strUserName = $request->usernameAdd;
                $user->strPassword = $request->passwordAdd;

                $user->save();
                
                $userinfo = new UserInfo;
                
                $userFirst = User::orderBy('intUserID', 'desc')->first();
                
                $userinfo->strEmail = $request->emailAdd;
                $userinfo->strFirstName = $request->firstnameAdd;
                $userinfo->strLastName = $request->lastnameAdd;
                $userinfo->strAddress = $request->addressAdd;
                $userinfo->strContactNumber = $request->contactAdd;
                $userinfo->intUserID = $userFirst->intUserID;
                
                $userinfo->save();
                
                return redirect('account/register')->with('message', 'Record Added.');
            }
        } catch (Exception $e) {
            
        }    
    }
}
