<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\UserInfo;
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
                $userInfo = UserInfo::find($result->intUserID);
                break;
            }
        }
        
        
        
        if ($checker){
            
            if ($result->intIdentifierUser == 0){//client
                $request->session()->put('user', '0');
                $request->session()->put('userID', $result->intUserID);
                $request->session()->put('userFirstName', $userInfo->strFirstName);
                return redirect('client/clientmain');
            }else{//admin
                $request->session()->put('user', '1');
                return redirect('maintenance/animal');    
            }
            
        }else{
            return redirect('account/login')->with('message', '1');
        }
    }

}
