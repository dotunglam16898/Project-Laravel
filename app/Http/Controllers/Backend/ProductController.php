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
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        // $product = Product::get();
        // $product = Product::find($id);
        $product = Product::paginate(10);
        // $images = $product->images;
        return view('backend.products.index')->with([
            'products' => $product,
            // 'images' => $images

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::get();
        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories,
            'product' => $product
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

        // $validatedData= $request->validate([ // C1
        //     'name' => 'required|min:6|max:255',
        //     'origin_price' => 'required|numeric',
        //     'sale_price' => 'required|numeric',
        //     'category_id' =>'required',
        //     'status' => 'required',
        //     'content' => 'required',
        //     // 'images'=>'file'



        // ]);




        

        // if ($request->hasFile('image')){
        //     // $path = Storage::putFile('images',$request->file('image')); C1
        //     // $path = Storage::disk()
        //     $file = $request->file('image');

        //     $path = $file->store('images',['disk' => 'public']);
        //     dd('ok');
        // }else{
        //     dd('khong co file');
        // }
        // $product = Product::create($request->except(['_token']));
        // $product = Product::create($request->all());


        // dd($request->config);




        $product = new Product();
        $product->name = $request->get('name');
        $product->config = json_encode($request->get('config',null));
        // dd($product->config);
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        // $product->->discount_percent = $request->get('discount_percent',null);
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->save();

        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image) {

                // $file = $image->store('image');
                $namefile= $image->getClientOriginalName();
                // $path= 'storage/products/'.$namefile;
                // $url = Storage::url($namefile);
                // $url = $path;



                $product_image= Storage::disk('public')->putFileAs('products',$image,$namefile);

                $url = Storage::url($product_image);
                 // dd($url);

                $image = $product->images()->create([
                    'name' => $namefile,
                    'path' => $url


                ]);
            }

            // $image = new Image();
            // $image->name = $namefile;
            // $image->path = $url;
            // // $image->product_id = 1;
            // $image->save();
            // dd('ok');

            // dd($image);
        }else{
            dd('ko co file');
        }




        

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
        $categories = $product ->category;
        // dd($categories);
        $images = $product->images;
        // dd($images);
        return view('backend.products.show')->with([
            'product' => $product,
            'images' => $images,
            'categories' => $categories
        ]);
        
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
    public function edit(Product $product)
    {
        $categories = Category::get();
        // return view('backend.products.create')->with([
        //     'categories' => $categories
        // ]);
        $user = Auth::user();
     // dd($user);
     // $product = Product::find($id);
        if ($user->can('update',$product)) {
         // dd('Yes');
            return view('backend.products.edit')->with([
                'product' => $product,
                'categories' => $categories

            ]);

        }else{
            dd('Khong');
        }

    //  $categories = Category::get();
    //  return view('backend.products.edit')->with([
    //     'product' => $product,
    //     'categories' => $categories

    // ]);
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


        // $validatedData= $request->validate([ // C1
        //     'name' => 'required|min:6|max:255',
        //     'origin_price' => 'required|numeric',
        //     'sale_price' => 'required|numeric',
        //     'category_id' =>'required',
        //     'status' => 'required',
        //     'content' => 'required',




        // ]);
        $product = Product::find($id);
        if (Gate::allows('update-product',$product)) {
            // dd('yes');

            // $product_obj = new Product();
            // $product_obj->name = $request->get('name');
            // $product_obj->save();
            // return redirect()->route('backend.product.index');

            $name = $request->get('name');
            $slug = $request->get('slug');
            $category_id = $request->get('category_id');
            $origin_price = $request->get('origin_price');
            $sale_price = $request->get('sale_price');
            $content = $request->get('content');
            $status = $request->get('status');
            $user_id = $request->get('user_id');
            // $config = $request->get('config');
            

        // Cập nhật
            $product = Product::find($id);
            $product->name = $name;
            $product->config = json_encode($request->get('config',null));
            $product->category_id = $category_id;
            $product->origin_price = $origin_price;
            $product->slug = $slug;
            $product->sale_price= $sale_price;
            $product->content = $content;
            $product->status = $status;
            $product->user_id = Auth::user()->id;
            $product->save();
            return redirect()->route('backend.product.index');
        }else{
            dd('NO');
        }


        // $name = $request->get('name');
        // $slug = $request->get('slug');
        // $category_id = $request->get('category_id');
        // $origin_price = $request->get('origin_price');
        // $sale_price = $request->get('sale_price');
        // $content = $request->get('content');
        // $status = $request->get('status');
        // $user_id = $request->get('user_id');

        // // Cập nhật
        // $product = Product::find($id);
        // $product->name = $name;
        // $product->category_id = $category_id;
        // $product->origin_price = $origin_price;
        // $product->slug = $slug;
        // $product->sale_price= $sale_price;
        // $product->content = $content;
        // $product->status = $status;
        // $product->user_id = Auth::user()->id;
        // $product->save();
        // return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        // return redirect()->back();
        return redirect()->route('backend.product.index');
    }
}
