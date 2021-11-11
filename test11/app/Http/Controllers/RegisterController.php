<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create ()
    {
        return view('register.create');
    }

    public function store()
    {
        $user = $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8','max:255']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect(route('posts'))->with('success', 'Your account has been created.');
    }
}
