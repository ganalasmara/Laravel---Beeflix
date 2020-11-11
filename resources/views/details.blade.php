@extends('layouts.layout')
@section('content')
<!-- I MADE GANAL ASMARA JAYA - 2201799386-->
<title>BeeFlix - {{$movie->title}}</title>
<div class="title flex-center">
                    BeeFlix
    </div>
    <div class="flex-center text-color-black">
    <button onclick="goBack()" type="button" class="btn btn-secondary mx-2">Back</button>
    <a href="/"><button type="button" class="btn btn-secondary">Lihat Semua Film</button></a>
    </div>
       

       
           
        <div class="container mt-5">
        <div class="row row-cols-4 mb-3">
                <div class="col-md-3">
                    <img src="{{$movie->photo}}" alt="">
                   
                
                </div>
                <div class="col-md-4 mt-2">
                    <h2 class="flex-center">{{$movie->title}}</h2>
                    <p>Rating: {{$movie->rating}}</p>
                    <p>
                        {{$movie->description}}
                    </p>
                    <br>
                    <p>Kategori: </p>
                    @if($movie->genre_id=='1')
                    <a href="/drama" >Drama</a>
                    @elseif($movie->genre_id=='2')
                    <a href="/kids" >Kids</a>
                    @elseif($movie->genre_id=='3')
                    <a href="/tvshow" >TV Show</a>
                    @endif
                </div>

                <div class="col-md-4 mt-2">
                    <h2 class="flex-center">Episode</h2>
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                            <th scope="col">Episode</th>
                            <th scope="col">Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($episode as $ep)
                            <tr>
                                <th scope="row">{{$ep->episode}}</th>
                                <td>{{$ep->title}}</td>                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagebutton flex-center">
                    {{$episode->links()}}
                    </div>
                </div>
                                                                      
          
            </div>
            
        </div>
@endsection
