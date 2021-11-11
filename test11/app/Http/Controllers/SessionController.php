<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt($attributes))
        {
            session()->regenerate();

            return redirect(route('posts'))->with('success', 'Welcome Back');
        }

        throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified']);

        // return back()
        // ->withInput()
        // ->withErrors(['email' => 'Your provided credentials could not be verified']);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect(route('posts'))->with('success', 'Goodbye');
    }

    public function lgin()
    {
        return view('session.login');
    }
}
