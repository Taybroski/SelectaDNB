<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
    public function __construct()
    {
        // $this->middleware('auth', ['except' => 'index']);
        // $this->middleware('admin', ['except' => ['index', 'home']]);
    }

    public function index()
    {
        return view('pages.index');
    }

    public function home()
    {
        return view('pages.home');
    }
}
