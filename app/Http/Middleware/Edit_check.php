<?php

namespace App\Http\Middleware;

use Closure;

class Edit_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id)
    {
        // $account = Message::find($request) -> account; 
        // if(session('account') == $account){
        //     return $next($request);
        // }
        return $id;
        return $request($next);
        return redirect() -> route('home');
    }
}
