@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
            @foreach ($movies as $movie)
            <div class="col-3 py-3">                
                <div class="card border-info-subtle" style="width: 18rem;">
                    <div class="card-header bg-primary-subtle">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                    </div>
                    <div class="card-body bg-body-tertiary">
                      <p class="card-text">{{$movie->nationality}}</p>
                      <p class="card-text">{{$movie->date}}</p>
                      <p class="card-text">Vote: <span class="fw-bold">{{$movie->vote}}</span></p>
                      
                    </div>
                  </div>
                
            </div>
            @endforeach
            
        </div>
    </div>


@endsection