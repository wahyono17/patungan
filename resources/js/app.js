/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', 
require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#coba',
    data:{
        title : "my title",
        content:"this my content",
        sembarang:'',
        kumpulanSembarang:[],
        qty:1,
        
    },
    methods: {
        naik(){if(this.qty > 0){this.qty += 1}
            },
        turun(){if (this.qty > 1){
            this.qty -= 1
        }}
    },
});

//angka naik turun di show post
const transc = new Vue({
    el: '#transc',
    data:{
        qty:1,
        
    },
    methods: {
        naik(){if(this.qty > 0){this.qty += 1}
            },
        turun(){if (this.qty > 1){
            this.qty -= 1
        }}
    },
});


// resources/js/app.js

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';

// resources/js/app.js

$('#datepicker').datepicker();

//jquery ajax cari
$(document).ready(function(){
    $('#inputcari').change(function(){
        var cari = $('#inputcari').val();
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/search"+ cari,
            //data: tidak perlu mengirim data karena oop
            success: function (response) {
                $('#content').html(response);
            }
        });  
    });
});
//

//mulai coba2 untuk judul selalu di atas tapi belum selesai
$('#yono').click(function(){
    $('nav').removeClass('navbar')
    $('nav').addClass('fixNavbar')
    $('#title').removeClass('navbar-brand')
    
});
//memakai jquery
$(window).scroll(function(){
    var atas = $('nav');
    var stickey = atas.offsetTop;

});

//for judul selalu di atas
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("Navbar");    
    navbar.classList.add("fixNavbar")
  } else {
    navbar.classList.remove("fixNavbar");
  }
}
