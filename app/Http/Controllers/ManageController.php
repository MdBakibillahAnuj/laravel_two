<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function newProduct(Request $request)
    {
        return $request->all();
    }
}
