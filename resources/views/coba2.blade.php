@extends('layouts.app')
@section('content')
    <form action="/coba/store" method="post">
        @csrf
        <input type="text" name="id">
        <button type="submit" >pencet</button>
    </form>
@endsection