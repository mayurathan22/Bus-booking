<?php
use Illuminate\Support\Facades\Auth;
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {  
        if (! $request->user()) {
        abort(403, 'Unauthorized action.');
    }

        // return redirect('/');
        return $next($request);

    }
}
