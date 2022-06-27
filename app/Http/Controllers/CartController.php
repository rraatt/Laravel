<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ordersproducts;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);

        return redirect()->route('cart');
    }

    public function updateCart(Request $request)
    {
        $value = \Cart::get($request->id)->quantity;
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity + $value
                ],
            ]
        );
        if(!\Cart::get($request->id)->quantity){
            \Cart::remove($request->id);
        }
        return redirect()->route('cart');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart');
    }

    public function clearCart()
    {
        \Cart::clear();

        return redirect()->route('cart');
    }

    public function checkout(){
        $products = \Cart::getContent();
        return view('checkout', compact('products'));
    }

    public function neworder(){
        return view('order_ready');
    }

    public function create_order(Request $request){
        $order = new Order;
        $order->client_name = $request->name;
        $order->client_surname = $request->surname;
        $order->client_address = $request->address;
        $order->client_email = $request->email;
        $order->total = \Cart::getTotal();
        $order->save();
        $cur_id = $order->id;
        foreach(\Cart::getContent() as $item){
            $ordersproduct = new Ordersproducts;
            $ordersproduct->product_id = $item->id;
            $ordersproduct->order_id = $cur_id;
            $ordersproduct->quantity = $item->quantity;
            $ordersproduct->save();
        }
        \Cart::clear();
        return redirect()->route('neworder')->with(['order' => $cur_id]);
    }

    public function track(){
        return view('tracker');
    }

    public function tracksearch(Request $request)
    {
        $order = Order::find($request->trackid);
        if($order==null){
            return redirect()->route('track')->with(['message' => 'Замовлення не знайдено']);
        }
        else{
            return redirect()->route('yourorder', ['id'=>$order->id]);
        }
    }

    public function yourorder($id){
        $order = Order::find($id);
        return view('yourorder', compact('order'));
    }
}
