<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        $role = Auth::user()->role;
        return view('admin.index', compact('name', 'role'));
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function content()
    {
        return view('admin.content.index');
    }
    
    public function header()
    {
        return view('admin.content.header');
    }
}
