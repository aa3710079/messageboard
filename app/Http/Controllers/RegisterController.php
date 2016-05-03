<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;

use Session;

class RegisterController extends Controller
{
    public function register_check( Request $request ) {

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
