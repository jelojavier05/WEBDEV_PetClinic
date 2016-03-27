<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
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
                
            if ($checker){
                $user = new User;

                $user->strUserName = $request->usernameAdd;
                $user->strPassword = $request->passwordAdd;

                $user->save();
                
                return redirect('account/register')->with('message', 'Record Added.');
            }
        } catch (Exception $e) {
            
        }    
    }
}
