<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        // $products = Product::get();
        $products = Product::paginate(10);
        return view('backend.products.index')->with([
            'products' => $products

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('backend.products.create');
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
        $product = Product::find($id);
        dd($product->category->name);
        
    }

    public function showImages($id)
    {
        $product = Product::find($id);
        // // dd($product);
        // foreach($products as $product){
        //     // echo $products->name;
        $images = $product->images;
        





        return view('backend.products.showImages')->with([
            'images' => $images,
            'product' => $product

        ]);
    }

    // public function showCategory($id)
    // {
    //     $product = Product::find($id);
    //     // dd($product->category->name);
    //     foreach ($product->category as $products ) {
    //     }
        
    // }

    // public function showProducts($id)
    // {
    //     $user = User::find($id);
    //     // foreach ($user->products as $users ) {
    //     //     echo $users->name. '<br>';
    //     // }
    //     $products = $user->products;
    //     return view('backend.users.showProducts')->with([

    //         'user' => $user,
    //         'products' => $products

    //     ]);
    // }

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
