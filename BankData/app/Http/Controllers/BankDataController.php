<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankDataController extends Controller
{

    public function index()
    {
        return view('bank-data.index');
    }
}
