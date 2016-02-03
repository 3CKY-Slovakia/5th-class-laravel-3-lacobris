<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ArticleOwnage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $articleID)
    {
        if(empty(Auth::user()->isOwner($request->id))){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
