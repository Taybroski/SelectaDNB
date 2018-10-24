<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        return view('pages.home', compact('name', 'role'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function returns()
    {
        return view('pages.returns');
    }

    public function terms()
    {
        return view('pages.terms');
    }
}
