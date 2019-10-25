<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{   
    public function firstpage(){
        //pertama buka web muncul semua
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        return view('welcome.welcome', compact('posts'));
    }

    public function index(){
        //hanya post selain milik id yang muncul
        $id = auth()->user()->id;
        $posts = Post::where('user_id','!=',$id)->orderBy('updated_at', 'DESC')->get();
        //dd($posts);
        return view('welcome.welcome', compact('posts'));
    }

    public function search(Request $request){
        
        $id = auth()->user()->id ?? 0;//jika belum login maka id = 0
        
        $varSearch = $request->inputcari;
        //cari yang like di tulis dan user_id bukan id yang melihat
        $posts = Post::where('caption','like','%'.$varSearch.'%')->where('user_id','!=',$id)->get();
        return view('welcome.welcome', compact('posts'));
    }

    public function searchAjax($cari){
        
        $id = auth()->user()->id ?? 0;//jika belum login maka id = 0
        
        //$varSearch = $request->inputcari;
        //cari yang like di tulis dan user_id bukan id yang melihat
        $posts = Post::where('caption','like','%'.$cari.'%')->where('user_id','!=',$id)->get();
        return view('welcome.ajax', compact('posts'));
    }
}
