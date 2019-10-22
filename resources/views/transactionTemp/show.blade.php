@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        
        <div class="col-md-6">
                <form action="/transactionTemp/store" method="post">
                    @csrf
                    <div class="card" id="transc">
                        <div class="card-body">
                            <input name="postid" value="{{$post->id}}" type="hidden">
                            <h5 class="card-title">{{$post->caption}}</h5>
                            <h5 class="card-title">{{$post->price}}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <label @click="turun">-</label> <input type="text" v-model.number="qty" disable name="qty"> <label @click="naik">+</label> 
                            <br> <br>
                            <button type="submit" class="btn btn-primary">Go somewhere</button>
                        </div>
                    </div>
                </form>
        </div>
        <div class=" card col-md-3"> 
            <div class="card">
                <img src="/storage/{{$profile->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$profile->title}}</h5>
                <p class="card-text">{{$profile->description}}</p>
            </div>
        </div>
 
    
    </div>
    </div>
          
@endsection
