<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Episode;
use Illuminate\Support\facades\DB;

class KidsController extends Controller
{
    public function index(){
        // $kids = [
        // 'kids1' => 'Spongebob Squarepants',
        // 'kids2' => 'Danny Phantom',
        // 'kids3' => 'Jimmy Neutron',
        // 'kids4' => 'Mickey Mouse'
        //  ];

        $kids = Movie::where('genre_id','2')->get();
        // $kids =  DB::table('movies')->where('genre_id','2')->get();

    return view('kids')->with('kids',$kids);
    }
}
