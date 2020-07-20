<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderProduct;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Cart::content();
        $total = Cart::priceTotal();
        // dd($total);
        $images = Image::where('status',1)->get();
        $product_discount = Product::where('discount_percent','>',6)->take(5)->get();
        // dd($images);
        $products = Product::get();

        // dd($products);
        // $products = Product::find($id);
        // dd($total);
        // dd($items);


        return view ('frontend.cart2')->with([
            'items' => $items,
            'images' => $images,
            'products' => $products,
            'total' => $total,
            'product_discount' => $product_discount


        ]);
    }

    public function plus($rowId,$qty){
        $qty = (int)$qty;
        Cart::update($rowId,['qty'=>$qty+1]);
        return redirect()->route('frontend.cart');
    }

    public function decrease($rowId,$qty){
        $qty = (int)$qty;
        Cart::update($rowId,['qty'=>$qty-1]);
        if($qty == 0){
            Cart::remove($rowId);

        }
        return redirect()->route('frontend.cart');
    }



    public function remove($id){

        $items = Cart::content()->where('rowId',$id);
        // dd($items);
        if($items->isNotEmpty()){
         Cart::remove($id);
     }
     return redirect()->route('frontend.cart');
 }

 public function add($id)
 {
        // dd($id);
    $product= Product::find($id);
    Cart::add($product->id , $product->name ,1,$product->sale_price,0);

    return redirect()->route('frontend.cart');
}

public function wishlist_index(){
 $items = Cart::content();

 // $images = Image::where('status',1)->get();
 $images = Image::where('status',1)->get();
 $product_discount = Product::where('discount_percent','>',6)->take(4)->get();
        // dd($images);
 $products = Product::get();

        // dd($products);
        // $products = Product::find($id);
        // dd($total);
        // dd($items);


 return view ('frontend.wishlist')->with([
    'items' => $items,
    'images' => $images,
    'products' => $products,
    'product_discount' =>$product_discount


]);
}

public function add_wish($id){
        // dd($id);
   $product= Product::find($id);
   Cart::add($product->id , $product->name ,1,$product->sale_price,0);

   return redirect()->route('frontend.wish');
}

public function delete(){
   Cart::destroy();
   return redirect()->route('frontend.cart');
}

public function update($id){

    $items = Cart::content()->where('rowId',$id);
    if($items->isNotEmpty()){
        for ($i=2; $i <= 100 ; $i++) { 
            Cart::update($id,$i);
        }
        
    }
    return redirect()->route('frontend.cart');

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

    public function order(Request $request){
        // dd(1);

        $user = Auth::user();
        


        // $items = Cart::content()->where('rowId',$id);
        $items = Cart::content();
         // dd($items);


        // $order = Order::find($id);
        // $test =  $order->products()->attach($items);
        $order = new Order();

        foreach ($items as $item) {

            $order->name = Auth::user()->name;
            $order->user_id = Auth::user()->id;
         // $order->quantity = $item->qty;
            $order->address = Auth::user()->address;
            $order->phone = Auth::user()->phone;
            $order->total_price = $item->price;
            $order->save();
            // dd($save);

            $order_product = new OrderProduct();
            $order_product->order_id = $order->id;
            $order_product->product_id = $item->id;
            $order_product->quantity = $item->qty;
            $order_product->name = $item->name;
            $order_product->price = $item->qty * $item->price;
            $save =  $order_product->save();



        }


        Cart::destroy();
        return redirect()->route('frontend.wish');

        // dd('success');




        
    }

    public function checkout(){

        if(Auth::check()){
         $images = Image::where('status',1)->get();
         $product_discount = Product::where('discount_percent','>',6)->take(5)->get();
        // dd($images);
         $products = Product::get();

         $items = Cart::content();
         $total = Cart::priceTotal();
        // dd($total);
         $images = Image::where('status',1)->get();
         $product_discount = Product::where('discount_percent','>',6)->take(5)->get();
        // dd($images);
         $products = Product::get();
         return view('frontend.checkout')->with([
           'items' => $items,
           'images' => $images,
           'products' => $products,
           'total' => $total,
           'product_discount' => $product_discount

       ]);
     }else{
        return view('backend.auth.login');
    }

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
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
