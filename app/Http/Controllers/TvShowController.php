<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Episode;
use Illuminate\Support\facades\DB;

class TvShowController extends Controller
{
    public function index(){
        // $tvshow = [
        //     'tvshow1' => 'Sword Art Online',
        //     'tvshow2' => 'Demon Slayer',
        //     'tvshow3' => 'Dr. Stone',
        //     'tvshow4' => 'Attack on Titan'
        // ];
        
        $tvshow = Movie::where('genre_id','3')->get();
        
    return view('tvshow')->with('tvshow',$tvshow);
    
    }
}
