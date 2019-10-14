<?php
use App\Post;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $posts = Post::all()->latest()->paginate(10);
        return view('welcome', compact('posts'));
    }
}
