<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home' , [
            'title' => 'Studio Number One',
            'experts' => Master::query()
                ->latest()
                ->take(6)
                ->select('masters.id', 'masters.name', 'masters.description', 'masters.photo', 'masters.experience')
                ->get(),
        ]);
    }
}
