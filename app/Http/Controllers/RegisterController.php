<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('page.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $request['isAdmin'] = false;
        User::create($request->except('password_confirmation'));
        return redirect()->route('login')->with('status', 'register success');
    }
}
