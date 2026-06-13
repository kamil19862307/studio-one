<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/modern', function () {
    return Inertia::render('Welcome', [
        'name' => 'Камиль' // Передаем данные во Vue!
    ]);
});

