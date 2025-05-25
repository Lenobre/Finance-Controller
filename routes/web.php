<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, "index"])->name("login");

Route::group(["middleware" => "auth", "as" => "dashboard."], function () {
    Route::get("/dashboard", function () {
        return view("pages.dashboard.index");
    })->name("index");
});


Route::group(["prefix" => "api", "as" => "api."], function () {
    Route::group(["prefix" => "auth", "as" => "auth."], function () {
        Route::post("/login", [AuthController::class, "login"])->name("login");
    });
});
