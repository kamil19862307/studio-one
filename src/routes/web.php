<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/modern', function () {

    $users = User::query()->latest()->take(5)->select('id', 'name', 'email')->get();

    return Inertia::render('Welcome', [
        'name' => 'Камиль', // Передаем данные во Vue!
        'users' => $users,
        'title' => 'Studio Number One',
    ]);
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

