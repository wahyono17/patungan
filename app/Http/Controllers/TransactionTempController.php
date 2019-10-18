<?php

namespace App\Http\Controllers;
use App\Post;
use App\TransactionTemp;
use Illuminate\Http\Request;

class TransactionTempController extends Controller
{
    
    
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
        $postId = $request->id;
        $data = Post::where('id','=',$postId)->get();
        
        $totalPrice = $data[0]->qty * $data[0]->price;
        
        /*
        auth()->user()->transactionTemp()->create([
            'user_id'=>$data['user_id'],
            'product_id'=>$data['id'],
            'caption'=>$data['caption'],
            'unit'=>$data['unit'],
            'qty'=>$data['qty'],
            'price'=>$data['price']
            
        ]);
            */


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Post::where('id','=',$id)->get();
        return view('transactionTemp.show', compact('transaction'));   
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
