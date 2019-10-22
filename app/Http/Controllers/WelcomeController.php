<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{   
    public function firstpage(){
        //pertama buka web muncul semua
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        return view('welcome', compact('posts'));
    }

    public function index(){
        //hanya post selain milik id yang muncul
        $id = auth()->user()->id;
        $posts = Post::where('user_id','!=',$id)->orderBy('updated_at', 'DESC')->get();
        //dd($posts);
        return view('welcome', compact('posts'));
    }

    public function search(Request $request){
        $id = auth()->user()->id;
        $varSearch = $request->search;
        //cari yang like di tulis dan user_id bukan id yang melihat
        $posts = Post::where('caption','like','%'.$varSearch.'%' && 'user_id','!=',$id )->get();
        return view('welcome', compact('posts'));
    }
}
