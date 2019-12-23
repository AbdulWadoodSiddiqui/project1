<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Pc;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcs = Pc::all();
        return view('pricing')->with(compact('pcs'));
    }

    public function choosepc()
    {
        $pcs = Pc::all();
        return view('car')->with(compact('pcs'));
    }



    /**
     * @param Request $request
     * @param $id
     */
    public function getAddToCart(Request $request, $id){
    $pc = Pc::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($pc, $pc->id);

    $request->session()->put('cart', $cart);
    return redirect('/');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items)>0) {
            Session::put('cart',$cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('Price.shoppingCart');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items)>0) {
            Session::put('cart',$cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('Price.shoppingCart');
    }

    public function getCart(){
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('shopping-cart', ['pcs' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }



    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


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
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */


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
