<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeagueController extends Controller
{

    public function list()
    {
        return view('dashboard');
    }
}