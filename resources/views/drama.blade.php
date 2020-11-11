@extends('layouts.layout')
@section('content')
<!-- I MADE GANAL ASMARA JAYA - 2201799386-->
<title>BeeFlix - Drama</title>
<div class="title flex-center">
                    BeeFlix
    </div>
    <div class="flex-center text-color-black">
    <button onclick="goBack()" type="button" class="btn btn-secondary mx-2">Back</button>
    <a href="/"><button type="button" class="btn btn-secondary">Lihat Semua Film</button></a>
    </div>
       

        <div class="flex-center position-ref ">
           
        <div class="container mt-5">
        <h1 class="flex-center">Drama</h1>
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
            </div>
        </div>
            
        </div>

        
@endsection
