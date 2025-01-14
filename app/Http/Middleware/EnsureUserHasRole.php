<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Scalar\String_;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if($request->user->role===$role) {
            
            return $next($request);}
       
        abort(403);

        /*if (Auth::user() &&  Auth::user()->role === $role) {
            return $next($request);
      }*/
      
      return redirect('/')->with('error','Vous n\'êtes pas un admin');
    }

    
}
