@extends('layouts.layout')
@section('content')
    <!-- I MADE GANAL ASMARA JAYA - 2201799386-->
    <title>BeeFlix - Homepage</title>

<div class="title flex-center">
                    BeeFlix
    </div>
    <div class="flex-center ">
    <button onclick="goBack()" type="button" class="btn btn-secondary mx-2">Back</button>
    <a href="/"><button type="button" class="btn btn-secondary">Lihat Semua Film</button></a>
    </div>
       

   
           
        <div class="container mt-5">
            <a class="btncat"href="/drama"><h1 class="flex-center">Drama</h1></a>
            <div class="row row-cols-4 mb-3">
                        
                
                    @foreach($drama as $drama)
                    <div class="col">
                        <div class="card-group">
                            <div class="card h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{$drama->photo}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$drama->title}}</h5>
                                    <a href="/details/{{$drama->id}}" class="btn btn-primary">Lihat Film</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                                       
            </div>

            <a class="btncat"href="/kids"><h1 class="flex-center">Kids</h1></a>
            <div class="row row-cols-4 mb-3">
                        
                
                    @foreach($kids as $kids)
                    <div class="col">
                        <div class="card-group">
                            <div class="card h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{$kids->photo}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$kids->title}}</h5>
                                    <a href="/details/{{$kids->id}}" class="btn btn-primary">Lihat Film</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                                       
            </div>

            <a class="btncat"href="/tvshow"><h1 class="flex-center">TV Show</h1></a>
            <div class="row row-cols-4 mb-3">
                        
                
                    @foreach($tvshow as $tvshow)
                    <div class="col">
                        <div class="card-group">
                            <div class="card h-100" style="width: 18rem;">
                                <img class="card-img-top" src="{{$tvshow->photo}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$tvshow->title}}</h5>
                                    <a href="/details/{{$tvshow->id}}" class="btn btn-primary">Lihat Film</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                                       
            </div>
        </div>
    
@endsection
