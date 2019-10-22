@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-9">
        <div class="row">
            <img class="card col-md-5" src="/storage/{{$post->image}}" alt="">
                <form action="/transactionTemp/store" method="post">
                    @csrf
                    <div class="card col-md-7" id="transc">
                        <div class="card-body">
                            <p hidden name="postid">{{$post->id}}</p>
                            <h5 class="card-title">{{$post->caption}}</h5>
                            <h5 class="card-title">{{$post->price}}</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button @click="turun">-</button> <input type="text" v-model.number="qty" disable name="qty"> <button @click="naik">+</button> 
                            <br> <br>
                            <button disabled="disabled" class="btn btn-primary">Go somewhere</button>                            
                        </div>
                    </div>
                </form>
        </div>    
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
