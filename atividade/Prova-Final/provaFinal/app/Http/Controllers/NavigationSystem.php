<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationSystem extends Controller
{
    public function index() {
        return view('public.home');
    }
    public function contatos() {
        return view('public.contato');
    }
    public function sobre() {
        return view('public.sobre');
    }
}
