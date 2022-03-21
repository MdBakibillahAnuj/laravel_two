<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function ManageProduct()
    {
        return view('manage.add-product');
    }
    public function viewProduct()
    {
        return view('manage.show-product');
    }
}
