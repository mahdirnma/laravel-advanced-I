<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home()
    {
        $products=Product::where('is_active',1)->get();
        return view('index',compact('products'));
    }

    public function home_profile($id)
    {
        $product=Product::find($id);
        return view('profile',compact('product'));
    }
    public function buy_panel(Product $product, StoreOrderRequest $request)
    {
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $phone=$request->input('phone');
        $user=Order::create([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'phone'=>$phone,
            'product_id'=>$product->id
        ]);
        if($user){
            session()->put('order',$user);
            return view('buy_panel');
        }
    }
    public function buy_panel_show(){
        return view('buy_panel');
    }

}
