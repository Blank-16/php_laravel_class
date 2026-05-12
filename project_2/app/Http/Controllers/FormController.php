<?php

namespace App\Http\Controllers;

use App\Rules\checkUpperCase;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        print_r($request->all());
        $request->validate(
            [
                'username' => ['required', 'min:2', 'max:8', new checkUpperCase],
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|confirmed',
            ],
            [
                'email.required' => "hello, write down email",
            ],
        );
        return "Form submitted successfully";
    }
}
