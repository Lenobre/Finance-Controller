<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(string $email, string $password)
    {
        if (!Auth::attempt(['email' => $email, 'password' => $password]))
            throw new \Exception("Email ou senha inválidos!");

        return redirect()->intended('dashboard');
    }
}
