<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('/main/login');
    }

    
    public function postLogin(Request $request)
    {
        $users = User::get();
        $checker = false;
        foreach($users as $result){
            if ($result->strUserName == $request->username && 
                $result->strPassword == $request->password){
                $checker = true;
                break;
            }
        }
        
        if ($checker){
            
            if ($result->intIdentifierUser == 0){//client
                return redirect('maintenance/register');
            }else{//admin
                $request->session()->put('user', '1');
                return redirect('maintenance/animal');    
            }
            
        }else{
            return redirect('account/login')->with('message', '1');
        }
    }

}
