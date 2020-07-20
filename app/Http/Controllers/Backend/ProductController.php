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
        $product = Product::orderBy('created_at','desc')->paginate(10);
        // foreach($product as $products){
        // // dd(json_decode($products->config));
        //     // return $config = json_decode($products->config);
        // }

        // $config = json_decode($product->config);
     // dd($config);
        // $images = $product->images;
        return view('backend.products.index')->with([
            'products' => $product,
            // 'config'=> $config
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

        $validatedData= $request->validate([ // C1
            'name' => 'required|min:6|max:255',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' =>'required',
            'status' => 'required',
            'content' => 'required',
            // 'images'=>'file'



        ]);


        
        // $category = new Category();
        
        $keys = $request->input('key');


        $values = $request->input('value');
         // dd($values);

        $configs = array_combine($keys, $values);
    // dd($configs);
        $product = new Product();
        $product->config = json_encode($configs);
        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->origin_price =$request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->description = $request->get('description');
        // dd($product->sale_price);
        // $product->->discount_percent = $request->get('discount_percent',null);
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $save= $product->save();











        // dd($product->config);
        

        $save = 1;
        if($save){
            $request->session()->flash('success','Tạo mới thành công');
        }else{
            $request->session()->flash('error','Tạo mới thất bại');
        }

        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image) {

                // $file = $image->store('image');
                $namefile= $image->getClientOriginalName();
                // $path= 'storage/products/'.$namefile;
                // $url = Storage::url($namefile);
                // $url = $path;



                $product_image= Storage::disk('public')->putFileAs('products',$image,$namefile);
                // dd($product_image);

                $url = Storage::url($product_image);
                 // dd($url);

                $image = $product->images()->create([
                    'name' => $namefile,
                    'path' => $url


                ]);
                // dd($image);
            }


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
        $configs = $product->config;
        $arr_config = json_decode($configs,true);
        // dd($arr_config);
        
        // dd($configs);
        $categories = $product ->category;
        // dd($categories);
        $images = $product->images;
        // dd($images);
        return view('backend.products.show')->with([
            'product' => $product,
            'images' => $images,
            'categories' => $categories,
            'arr_config' => $arr_config
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





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //Product $product
    {
        // $categories = Category::get();

        // $categories = Category::find($id);

        $user = Auth::user();
     // dd($user);
        $product = Product::find($id);
        $products = Product::get();
        $categories = $product->category;
        // dd($categories);
        $images = $product->images;


        // dd($images);
        // if ($user->can('update',$product)) {
        //  // dd('Yes');
        //     return view('backend.products.edit')->with([
        //         'product' => $product,
        //         'categories' => $categories,
        //         'products' => $products

        //     ]);

        // }else{
        //     dd('Khong');
        // }


        return view('backend.products.edit')->with([
            'product' => $product,
            'categories' => $categories,
            'images'=> $images,
            'products' => $products
                // 'products' => $products

        ]);

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

    public function delete_image($id){
        // dd(1);
        // dd($id);

        $image = Image::findOrfail($id);
        // dd($image->product_id);
        $product = Product::find($image->product_id);
        // dd($image->name);
        Storage::disk('public')->delete($image->name);
        $image->delete();
        // dd($images);
        // dd($product);
        // $productImage = $product->images;
        // dd($productImage);
        // $productImage->delete($id);
        // if(Storage::disk('public')->exists($images)){
        //     dd(1);

        // }

        return redirect()->route('backend.product.edit', $product->id);








    }




    public function update(Request $request, $id)
    {


        $validatedData= $request->validate([ // C1
            'name' => 'required|min:6|max:255',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' =>'required',
            'status' => 'required',
            'content' => 'required',
            'key' => 'required',
            'value' => 'required'





        ]);
        // $product = Product::find($id);
        // if (Gate::allows('update-product',$product)) {
            // dd('yes');

            // $product_obj = new Product();
            // $product_obj->name = $request->get('name');
            // $product_obj->save();
            // return redirect()->route('backend.product.index');
        $keys = $request->input('key');


        $values = $request->input('value');
         // dd($values);

        $configs = array_combine($keys, $values);
    // dd($configs);
        

        $name = $request->get('name');
        $slug = $request->get('slug');
        $category_id = $request->get('category_id');
        $origin_price = $request->get('origin_price');
        $sale_price = $request->get('sale_price');
        $content = $request->get('content');
        $status = $request->get('status');
        $user_id = $request->get('user_id');
        $description = $request->get('description');
            // $config = $request->get('config');


        // Cập nhật
        $product = Product::find($id);
        $product->config = json_encode($configs);
        $product->name = $name;
        // $product->config = json_encode($request->get('config',null));
        $product->category_id = $category_id;
        $product->origin_price = $origin_price;
        $product->slug = $slug;
        $product->sale_price= $sale_price;
        $product->content = $content;
        $product->description = $description;
        $product->status = $status;
        $product->user_id = Auth::user()->id;
        $save= $product->save();



        $save = 1;
        if($save){
            $request->session()->flash('success','Cập nhật thành công');
        }else{
            $request->session()->flash('error','Cập nhật thất bại');
        }


        // if($request->hasFile('images')){
        //     $images = $request->file('images');
        //     foreach ($images as $image) {
        //         $namefile = $image->getClientOriginalName();
        //         // $file = $image->store('image');
        //         // $path= 'storage/products/'.$namefile;
        //         $url = Storage::url($namefile);
        //         Storage::disk('public')->putFileAs('products',$image,$namefile);
        //         $product->images = $url;

        //     }

        // }else{
        //     dd('khong có file');
        // }
        $images = $product->images;
        // foreach ($images as $image) {
        //   dd();


        // }


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
                    'path' => $url,
                    


                ]);

                

            }


        // }else{
        //     dd('ko co file');
        // }
            




        }
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
        $product = Product::find($id);
        $product->delete();
        // return redirect()->back();
        return redirect()->route('backend.product.index');
    }
}
