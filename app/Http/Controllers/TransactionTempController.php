<?php

namespace App\Http\Controllers;
use App\Post;
use App\Profile;
use App\TransactionTemp;
use Illuminate\Http\Request;

class TransactionTempController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $postId = $request->postid;
        $data = Post::find($postId);//ambil dari model
        $qty = $request->qty;
        $totalPrice = $qty * $data->price;
 
        $tranTemp = new TransactionTemp;
            $tranTemp->user_id = auth()->user()->id;//ambil user id yang memproses
            $tranTemp->product_id = $postId;
            $tranTemp->caption = $data->caption;
            $tranTemp->unit = $data->unit;
            $tranTemp->qty = $qty;
            $tranTemp->price = $data->price;
            $tranTemp->totalPrice = $totalPrice;
        $tranTemp->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //ingat jika memakai where harus di ambil array ke 0 dulu
        //$post = Post::where('id','=',$id)->get();
        //$post = $post[0];
        $post = Post::find($id);
        //untuk mencari user pemilik post
        $user_id = $post->user_id;
        $profile = Profile::where('user_id','=',$user_id)->get();
        $profile = $profile[0];
        //dd($profile);
        return view('transactionTemp.show',compact('post','profile'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
