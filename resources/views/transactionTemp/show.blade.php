@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
    
    <div class="card col-md-9 mb-2" style="">
        <img class="col-md-3 pr-2 card-img-top" src="/storage/{{ $post->image }}" alt="Card image cap">
        <div class="card-body">          
          <h5 class="card-title" name="caption">{{$post->caption}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/transactionTemp/show/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class=" card col-md-3">
    <img class="pr-2 card-img-top" src="/storage/{{ $profile->image }}" alt="Card image cap">
    <h5 class="card-title">{{$profile->title}}</h5>
    <h5 class="card-text">{{$profile->description}}</h5>
    </div>
    </div>
    </div>
@endsection
