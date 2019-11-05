@extends('layouts.app')

@section('content')

<!-- secondary card-->
<div class="container">
<div class="row">
  
  @foreach ($posts as $post)
    <div class="col-md-3 pr-2 card mb-2" id="card">
        <img class="card-img-top" src="/storage/{{ $post->image }}" alt="Card image cap">
        <div class="card-body">          
          <h5 class="card-title" name="caption">{{$post->caption}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <p>{{number_format($post->price)}}</p>
          <a href="/transactionTemp/show/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  @endforeach

</div>
</div>
@endsection

