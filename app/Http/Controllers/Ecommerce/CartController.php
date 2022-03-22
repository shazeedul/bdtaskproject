<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CartController extends Controller
{
    
    public function index()
    {
        //
    }

    


    public function create(Request $request,$id)
    {
        
        // $request->session()->flush();
        // return true;
        $cart = $request->session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        'p_id' => $id,
                        'quantity' => 1
                    ]
            ];
           
            $request->session()->put('cart',$cart);
            $value = $request->session()->all();
            return redirect()->back()->with('status', 'Product added to cart successfully!');
            // echo "<pre>";
            // echo "No Id";
            // print_r($value);
            // return true;
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $request->session()->put('cart', $cart);
            $value = $request->session()->all();
            return redirect()->back()->with('status', 'Product added to cart successfully!');
            // echo "<pre>";
            // echo "if cart not empty";
            // print_r($value);
            // return true;
        }


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            'p_id' => $id,
            "quantity" => 1,
        ];
        $request->session()->put('cart', $cart);
        $value = $request->session()->all();
            // echo "<pre>";
            // echo "f item not exist in cart ";
            // print_r($value);
            // return true;
        
        return redirect()->back()->with('status', 'Product added to cart successfully!');
    }

    



    public function store(Request $request)
    {
        //
    }

    



    public function show($id)
    {
        //
    }

    



    public function edit($id)
    {
        //
    }

    



    public function update(Request $request, $id)
    {
        //
    }

    


    public function destroy(Request $request,$id)
    {
        $item = 'cart.'.$id;
        $value = $request->session()->pull($item);
        return redirect()->back()->with('status', 'Product delete to cart successfully');
    }
}
