<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{

    public function list()
    {
        return view('dashboard', ['leagues' => auth()->user()->leagues]);
    }
}
