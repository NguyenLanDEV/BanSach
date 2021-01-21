<?php

namespace App\Http\Controllers;

use App\Cart;
use App\models\SanPham;
use Illuminate\Http\Request;

class CartController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $product =  SanPham::find($id);
        if($product){
            $oldCart =  $request->session()->get('Cart') ? $request->session()->get('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addProduct($id,$product);
            $request->session()->put('Cart',$newCart);
            return view('cart.mini_cart',['cart'=>$newCart]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $product =  SanPham::find($id)->first();
        if($product){
            $oldCart =  $request->session()->get('Cart') ? $request->session()->get('Cart') : null;
            array_splice($oldCart->products,$id,1);
            $newCart = new Cart($oldCart);
            $request->session()->put('Cart',$newCart);
            return view();
        }
    }
}
