<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeagueController extends Controller
{

    public function list()
    {
        return view('dashboard', ['leagues' => auth()->user()->leagues]);
    }

    public function index()
    {
        $leagues = League::get();
        return view('league.index')->with('leagues', $leagues);
    }
    public function create()
    {
        return view('league.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $league = new League;
        $league->name = $request->input('name');
        $league['user_id'] = auth()->id();
        $league->save();
        return redirect()->route('league.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $league = League::find($id);
        return view('league.edit')->with('league', $league);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $league = League::find($id);
        $league->name = $request->input('name');
        $league->save();
        return redirect()->route('league.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $league = League::find($id);
        $league->delete();
        return redirect()->route('league.index');
    }
}
