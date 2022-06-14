<?php

namespace App\Http\Controllers;

use http\Client\Response;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(): \Illuminate\Http\Response
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request): Response
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/home')->with('success', "Account successfully registered.");
    }
}
