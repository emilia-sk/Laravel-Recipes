<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register Form
    public function create() {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|between:4,255|'
        ]);

        //Password Hash
        $formFields['password'] = bcrypt($formFields[ 'password']);

        //Create the user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }
}
