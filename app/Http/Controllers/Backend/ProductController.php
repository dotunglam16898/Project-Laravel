<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        // $product->s = Product::get();
        $product = Product::paginate(10);
        return view('backend.products.index')->with([
            'products' => $product

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
        // return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //StoreProductRequest
    {

        $validatedData= $request->validate([ // C1
            'name' => 'required|min:6|max:255',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' =>'required',
            'status' => 'required',
            'content' => 'required',




        ]);


        // $validatedData = $request->validate([ // C2
        //     'name' => ['required','min:6','max:255'],
        //     'origin_price' => ['required','numeric'],
        //     'sale_price' => ['required','numeric']



        // ]);

        // $validator = Validator::make($request->all(),
        //     [
        //         'name' => 'required|min:6|max:255',
        //         'origin_price' => 'required|numeric',
        //         'sale_price' => 'required|numeric',
        //         'content' => 'required'


        //     ],

        //     [
        //         'required' => ':attribute khong duoc de trong !',
        //         'min' => ':attribute khong duoc nho hon :min !',
        //         'max' => ':attribute khong duoc lon hon :max !'

        //     ],

        //     [
        //         'name' => 'Ten san pham',
        //         'origin_price' => 'gia goc',
        //         'sale_price' => 'gia ban',
        //         'content' => 'noi dung'



        //     ]
        // );
        // // dd($validator);
        // if($validator->errors()){
        //     return back()->withErrors($validator)->withInput();

        // }



        $product = new Product();
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        // $product->->discount_percent = $request->get('discount_percent',null);
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->save();

        return redirect()->route('backend.product.index');
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
        // // dd($product->);
        // foreach($product->s as $product->){
        //     // echo $product->s->name;
        $images = $product->images;
        





        return view('backend.products.showImages')->with([
            'images' => $images,
            'product' => $product

        ]);
    }

    // public function showCategory($id)
    // {
    //     $product-> = Product::find($id);
    //     // dd($product->->category->name);
    //     foreach ($product->->category as $product->s ) {
    //     }

    // }

    // public function showProducts($id)
    // {
    //     $user = User::find($id);
    //     // foreach ($user->products as $users ) {
    //     //     echo $users->name. '<br>';
    //     // }
    //     $product->s = $user->products;
    //     return view('backend.users.showProducts')->with([

    //         'user' => $user,
    //         'products' => $product->s

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
        // $categories = Category::get();
        // return view('backend.products.create')->with([
        //     'categories' => $categories
        // ]);
        $product = Product::find($id);
        $categories = Category::get();
        return view('backend.products.edit')->with([
            'product' => $product,
            'categories' => $categories

        ]);
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


        $validatedData= $request->validate([ // C1
            'name' => 'required|min:6|max:255',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' =>'required',
            'status' => 'required',
            'content' => 'required',




        ]);


        $name = $request->get('name');
        $slug = $request->get('slug');
        $category_id = $request->get('category_id');
        $origin_price = $request->get('origin_price');
        $sale_price = $request->get('sale_price');
        $content = $request->get('content');
        $status = $request->get('status');
        $user_id = $request->get('user_id');

        // Cập nhật
        $product = Product::find($id);
        $product->name = $name;
        $product->category_id = $category_id;
        $product->origin_price = $origin_price;
        $product->slug = $slug;
        $product->sale_price= $sale_price;
        $product->content = $content;
        $product->status = $status;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('backend.product.index');
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
