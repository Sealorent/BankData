<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSpasialController extends Controller
{

    public function index()
    {
        return view('data-spatial.index');
    }
}
