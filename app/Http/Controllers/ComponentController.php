<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ComponentController extends Controller
{
    public function index(): View
    {
        return view('dashboard');
    }
}
