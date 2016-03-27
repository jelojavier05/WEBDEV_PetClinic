<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('user') && $request->session()->get('user')==0) {

            return view('client/clientmain');
        }else{
            return redirect('main/homepage');
        }
        
    }
    
    public function destroy(Request $request)
    {
        $request->session()->flush();
        return redirect('main/homepage');
    }
}
