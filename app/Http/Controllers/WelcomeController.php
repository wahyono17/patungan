<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{   
    public function firstpage(){
        $posts = Post::all();//->orderBy('updated_at', 'DESC')->get();
        return view('welcome', compact('posts'));
    }

    public function index(){
        $id = auth()->user()->id;
        $posts = Post::where('user_id','!=',$id)->orderBy('updated_at', 'DESC')->get();
        //dd($posts);
        return view('welcome', compact('posts'));
    }

    public function search(Request $request){
        $varSearch = $request->search;
        //dd($varSearch);
        $posts = Post::where('caption','like','%'.$varSearch.'%')->get();
        dd($posts);
    }
}
