<?php

namespace App\Http\Controllers;

use App\Club;
use App\Tournament;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function maps(){
        return view('maps');
    }
    public function club($id){
       $club = Club::where('id', $id)->firstorfail();
        return view('club')->with('club', $club);
    }

    public function partners(){
        return view('partners');
    }

    public function tournament(){
        $tournament = Tournament::all();
        return view('tournaments')->with('tournaments', $tournament);
    }

    public function contacts(){
        return view('franchaise');
    }
}
