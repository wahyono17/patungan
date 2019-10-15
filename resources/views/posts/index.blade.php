@extends('layouts.app')

@section('content')
<div class="container">
   <div class="p-2 float-right">
      <a href="/p/create">Add New Picture</a>
   </div>
<div>
<!-- tampilkan gambar dalam card -->
<div class="row">
        @foreach($posts as $post)     
        <div class="col-md-3 card mt-3 mr-4" style="">
             <img class="card-img-top" src="/storage/{{ $post->image }}" alt="Card image cap">
             <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="/p/{{$post->id}}" class="btn btn-primary">Edit</a>
             </div>
         </div>
         @endforeach
</div>

@endsection
