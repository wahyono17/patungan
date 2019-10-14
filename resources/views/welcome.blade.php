@extends('layouts.app')
@section('welcome')
<div class="container">
<div class="row"> 
    <form class="form-inline mt-2 mb-2">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</div>

<div class="container">
<div class="row">
  <div class="card text-center mb-2">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
  </div>
</div>  
</div>

<!-- secondary card-->
<div class="container">
<div class="row">
  
  @foreach ($posts as $post)
    <div class="col-md-3 pr-2 card mb-2" style="">
        <img class="card-img-top" src="/storage/{{ $post->image }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  @endforeach

</div>
</div>
@endsection

<style>
  .atas{margin-top: 1em;}
  .bawah{margin-bottom: 1em;}
  .kanan{margin-right: 1em;}
</style>