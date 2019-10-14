<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('updated_at', 'DESC')->get();
        //dd($posts);
        return view('welcome', compact('posts'));
    }
}
