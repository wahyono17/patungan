@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <p>{{$post->id}}</p>
        <p>{{$post->image}}</p>

    </div>
</div>
@endsection
