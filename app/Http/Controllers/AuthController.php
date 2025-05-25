<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Services\AuthService;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view("pages.auth.login");
    }

    public function login(LoginRequest $request, AuthService $service)
    {
        $payload = $request->validated();

        try {
            $service->login($payload["email"], $payload["password"]);

            $request->session()->regenerate();

            return response()->json([
                "message" => "Logado com sucesso!",
                "redirect" => route("dashboard.index")
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "message" => $e->getMessage()
            ], 400);
        }
    }
}
