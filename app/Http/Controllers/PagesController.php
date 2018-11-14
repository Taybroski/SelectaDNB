<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Image;

class PagesController extends Controller
{
  
    public function __construct()
    {
        // $this->middleware('auth', ['except' => 'index']);
        // $this->middleware('admin', ['except' => ['index', 'home']]);
    }

    public function index()
    {
        $header = Image::latest()->first();
        return view('pages.front', compact('header'));
    }

    public function home()
    {
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        return view('pages.home', compact('name', 'role'));
    }

    public function gallery()
    {
        return view('pages.gallery');
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
