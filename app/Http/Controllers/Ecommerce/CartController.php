<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
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
    public function create(Request $request,$id)
    {
        $cart = $request->session()->get('cart');

        if(!$cart) {
            $cart = [
                    $id => [
                        'quantity' => 1
                    ]
            ];
           
            $request->session()->put('cart',$cart);
            //session([$id=>$cartData]);
            $value = $request->session()->all();
            echo "<pre>";
            echo "No Id";
            print_r($value);
            return true;
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $request->session()->put('cart', $cart);
            $value = $request->session()->all();
            echo "<pre>";
            echo "if cart not empty";
            print_r($value);
            return true;
           /* return redirect()->back()->with('success', 'Product added to cart successfully!');*/
        }


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "quantity" => 1,
        ];
        $request->session()->put('cart', $cart);
        $value = $request->session()->all();
            echo "<pre>";
            echo "f item not exist in cart ";
            print_r($value);
            return true;
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        
        
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
