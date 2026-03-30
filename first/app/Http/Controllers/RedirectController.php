<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function redirectToHome()
    {
        // Redirects to a named route if you update the route later,
        // or directly to a URL path
        return redirect('/home')->with('message', 'You were redirected back to home!');
    }
}
