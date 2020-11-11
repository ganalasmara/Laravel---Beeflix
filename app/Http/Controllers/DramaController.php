<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Episode;
use Illuminate\Support\facades\DB;

class DramaController extends Controller
{
    public function index(){
        // $drama = [
        //     'drama1' => 'Reply 1988',
        //     'drama2' => 'Along with the Gods',
        //     'drama3' => 'Itaewon Class',
        //     'drama4' => 'Extracullicular'
        // ];
    
        // return view('drama', $drama);

        $drama = Movie::where('genre_id','1')->get();
        
    return view('drama')->with('drama',$drama);
    }
}
