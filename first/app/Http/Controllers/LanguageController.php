<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function showMonday($locale = 'en')
    {
        // Set application language/locale
        App::setLocale($locale);
        
        return view('Monday');
    }

    public function switchAndRedirect($locale)
    {
        // Example of setting locale in session and redirecting
        session()->put('locale', $locale);
        return redirect('/monday/' . $locale);
    }
}
