<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Episode;
use Illuminate\Support\facades\DB;

class HomeController extends Controller
{
    public function index(){
        
        $drama = Movie::where('genre_id','1')->get();
        $kids = Movie::where('genre_id','2')->get();
        $tvshow = Movie::where('genre_id','3')->get();
        

        return view('welcome')->with('drama',$drama)->with('kids',$kids)->with('tvshow',$tvshow);
    }

    public function show($id){
        $movie = Movie::find($id);
        $episode = Episode::where('movie_id', '=', $id)->paginate(3);
        return view('details')->with('movie', $movie)->with('episode',$episode);
    }
}
