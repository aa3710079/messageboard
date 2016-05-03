<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

use App\Http\Requests;

use Illuminate\Support\Facades\Session;

use DB;

class HomeController extends Controller
{  
     public function message() {
        $messages = DB::table('message')
                        ->join('member', 'message.account', '=', 'member.account')
                        ->select('message.*', 'member.user')
                        ->orderBy('id', 'desc')
                        ->get();
    	return view('message.home',compact('messages'));
    }
    
    public function create() {
        return view('message.post_message');
    }

    public function edit ($message) {
    	$messages = Message::find($message);
    	return view ( 'message.edit' , compact( 'messages' , 'message' ) );
    }

    public function update (Request $request , $id) {
    	$message = Message::find($id);
    	$message->subject = $request->subject;
    	$message->content = $request->content;
    	$message->save();
    	return redirect('home');
    }

    public function destroy ($message) {
    	Message::destroy($message);
    	return redirect('home');
    }

    public function store ( Request $request ) {
    	$message = new Message;
    	$message->subject = $request->subject;
    	$message->content = $request->content;
    	$message->account = Session::get('account');
    	$message->save();
    	return redirect('home');
    }
}
