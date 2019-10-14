@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <!--picture profile-->
        <div class="col-3 p-2">
            <img src="/storage/noImage.jpg" class="w-100">
        </div>
        <div class="p-2">
            <h6>Nama : {{$user->name}}</h6>
            <h6>Email : {{$user->email}}</h6>
          
          <h6>test : {{ route('register') }}</h6>
        </div>    
        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
    </div>
    </div>
@endsection
