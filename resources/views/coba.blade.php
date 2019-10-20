@extends('layouts.app')
@section('content')
<div class="container">
    <div id="coba">
        <h3 v-text="title"></h3>
        <p v-text="content"></p>
        <label v-text="sembarang" for=""></label>
        <p v-html="sembarang"></p>
        <ul>
            <li v-for="item in kumpulanSembarang" v-text="item"></li>
        </ul>
        <input type="text" v-model="sembarang"> <button @click="kumpulanSembarang.push(sembarang)">add Item</button>
        <!-- mulai baru -->
        <br> <br>
        <p v-text="qty"></p>
        <input type="text" id="iqty" v-model.number="qty" disable> <button @click="naik">+</button> <button @click="turun">-</button>
    </div>
</div>    
@endsection