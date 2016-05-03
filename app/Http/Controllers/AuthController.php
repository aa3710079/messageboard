<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;

use Illuminate\Support\Facades\Session;

use App\Message;


class AuthController extends Controller
{	
	public function login( Request $request ) {
		$members = Member::where('account', '=', $request->account)->first();
		if( isset($members) && $request->password == $members->password ) {
			Session::put( 'account' , $members->account );
			Session::put( 'user' , $members->user);
			return redirect('home');
		}
		else{
			return back()->with( 'msg' , 'error' );
		}
	}
	public function logout(){
    	Session::flush();
    	return redirect('home');
    }
    public function register( Request $request ) {

    	$members = Member::where( 'account' , '=' , $request->account )->first();

    	if( isset($members) ) {
    		return back()->with( 'msg' , 'existed' );
    	}

    	$member = new Member;
    	$member->account = $request->account;
    	$member->password = $request->password;
    	$member->user = $request->user;
    	$member->save();
    	Session::put ( 'account' , $member->account );
        Session::put ( 'user' , $member->user );
    	return redirect('home');
    }
}
