<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage($locale)
    {
        $allowedLocales = ['en', 'hi', 'bn'];

        if (!in_array($locale, $allowedLocales)) {
            return redirect()->back();
        }

        session(['locale' => $locale]);

        return redirect()->back()->cookie('locale', $locale, 60 * 24 * 365);
    }
}
