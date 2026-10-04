<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = "Joao";
        $habits = ['Dormir', 'Comer', 'Estudar','ddsds'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
