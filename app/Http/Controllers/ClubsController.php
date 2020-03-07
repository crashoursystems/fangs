<?php

namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests\CreateClubsRequest;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clubs.showall', ['clubs'=>Club::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClubsRequest $request)
    {

        $path = "/storage/".$request->file('image')->store('images/clubs', 'public');
        Club::create([
            'name'=>$request->name,
            'address' => $request->address,
            'place' =>$request->place,
            'priority'=>$request->priority,
            'image'=>$path
        ]);

        session()->flash('success', 'Клуб создан');
        return redirect(route('clubs.index'));
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
        $club = Club::Where('id', $id)->get()[0];
        return view('clubs.update')->with('club', $club);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateClubsRequest $request, $id)
    {
        $club = Club::Where('id', $id)->get()[0];
        $club->update([
            'name'=>$request->name,
            'address' => $request->address,
            'place' =>$request->place,
            'priority'=>$request->priority
        ]);

        session()->flash('success', 'Клуб обновлен');

        return redirect(route('clubs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Club::Where('id', $id)->get()[0]->delete();

        session()->flash('success', 'пост удален');
        return redirect(route('clubs.index'));
    }
}
