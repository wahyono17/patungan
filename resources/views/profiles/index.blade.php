@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <!--picture profile-->
        <div class="col-3 p-3">
            <img src="/storage/{{ $user->profile->image }}" class="w-100">
        </div>
        <div class="p-3">
            <h6>Nama : {{$user->name}}</h6>
            <h6>Email : {{$user->email}}</h6>
            
        </div>    
        <div class="p-3">
        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        </div>
    </div>
    </div>
@endsection
