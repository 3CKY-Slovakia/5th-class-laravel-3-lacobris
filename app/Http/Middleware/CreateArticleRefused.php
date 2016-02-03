<?php

namespace App\Http\Middleware;

use Closure;

class CreateArticleRefused
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->numberOfArticles() >= 2){
            return redirect('/')->with('message', 'Creating article refused, because you have too many articles created!');
        }else{
            return $next($request);
        }
    }
}
