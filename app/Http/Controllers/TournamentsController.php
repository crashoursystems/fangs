<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTournamentsRequest;
use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tournaments.index')->with('tournaments',Tournament::all() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTournamentsRequest $request)
    {






        Tournament::create($request->all());
        session()->flash('success', 'Турнир Создан');
        return redirect(route('tournaments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tournament = Tournament::Where('id', $id)->firstOrFail();
        return view('tournaments.update')->with('tournament', $tournament);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTournamentsRequest $request, $id)
    {
        $tournament = Tournament::Where('id', $id)->firstOrFail();
        $tournament->update($request->all());

        session()->flash('success', 'Турнир успешно изменен');
        return redirect(route('tournaments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tournament = Tournament::Where('id', $id)->firstOrFail();
        $tournament->delete();
        Storage::delete($tournament->image);
        session()->flash('success', 'Турнир успешно удален');
        return redirect(route('tournaments.index'));
    }
}
