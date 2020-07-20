<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('created_at','desc')->get();
        return view('backend.orders.index')->with([
            'orders' => $orders



        ]);
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

    public function complete($id)
    {
        $order = Order::find($id);

        $order->status = 2 ;
        $order->save();
        return redirect()->route('backend.order.index');

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
       $order = Order::find($id);
       $orders_products = OrderProduct::where('order_id', $id)->get();

       // dd($orders_products);
       // foreach ($orders_products as $order_product) {
           
       // }
       // dd($order_product);
       $products= $order->products;
       // foreach ($products as $product) {
           
       // }
       // dd($products);
       $users = $order->users;
       // dd($users);
       
       
       return view('backend.orders.show')->with([
        
        'order' => $order,
        'products' => $products,
        'users' => $users,
        'orders_products' => $orders_products,
        // 'product' => $product


    ]);
   }

   public function showProducts($id)
   {
    $order = Order::find($id);
    $products= $order->products;
    
    
    return view('backend.orders.show')->with([
        
        'order' => $order,
        'products' => $products

    ]);
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
        // dd(1);
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('backend.order.index');
    }
}
