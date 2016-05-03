<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

class LogoutController extends Controller
{
    public function logout(){
    	Session::flush();
    	return redirect('home');
    }
}
