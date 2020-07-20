<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\User;
use App\Models\Image;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        //--------------------------------------------------------------------------------

        // $categories = Category::get();
        $users= User::get();
        // $products = new Product;
        
        // dd($images);
        $products = Product::orderBy('created_at','desc')->take(5)->get();
        $productss = Product::get();
        // $productsss = Product::find($id);
        $images = Image::where('status',1)->get();

        $product_discount = Product::where('discount_percent','>',6)->get();
        $items = Cart::content();
        $total = Cart::priceTotal();
        // dd($product_discount);

        // $thumbnails =$productsss->images()->first();
        // dd($thumbnails);

    // dd($images);

        // dd($products);
           // $images = $product->images()->where('created_at','desc');

        // dd($images);
        // $images = Image::first()->get();
        // dd($images);
        // $thumbnails = $productss->images;
        // dd($thumbnails);






        return view('frontend.home')->with([
            'products' => $products,
            'images' => $images,
        // 'categories' => $categories,
            'productss' => $productss,
            'product_discount' => $product_discount,
            

            'items' => $items,
            'total' => $total

        // 'thumbnails' => $thumbnails



        ]);
    }

    public function search(Request $request){
        // $product = new Product();
        $products = Product::where('name','like','%'.$request->key.'%')->orwhere('sale_price','like',$request->key)->Paginate(12);

        $key = $request->key;
        $product->name = $request->get('name');

        $search = Product::where('name',$product->name);
        return view('frontend.list')->with([
            'products' => $products,
            'key' => $key,
            


        ]);
    }

    public function newproduct(){
      $items = Cart::content();
      $total = Cart::priceTotal();
      $images = Image::where('status',1)->get();
      $products = Product::orderBy('created_at','desc')->paginate(5);
      $productss = Product::orderBy('created_at','desc')->get();
      // dd($products);
      return view('frontend.newproduct')->with([
        'items' => $items,
        'total' => $total,
        'images' => $images,
        'products' => $products,
        'productss' => $productss



    ]);

  }



  public function detail($id)
  {
    $items = Cart::content();
    $total = Cart::priceTotal();
        // dd($items);
    $product = Product::find($id);
    $configs = $product->config;
    $arr_config = json_decode($configs,true);
    $products = Product::all();
    $productss = Product::orderBy('created_at','asc')->take(8)->get();
    
    $product_discount = Product::where('discount_percent','>',6)->orderBy('created_at','desc')->take(5)->get();

        // $productsss = $category->products;
        // dd($productss);
        // $productss = $product_all->images()->first();
        // dd($productss);
        // $productss = Product::where('id',2)->get();
    // dd($productss);
    $categoriess = Category::get();
    $category = Category::find($id);
    $categories = $product ->category;
        // dd($categories);
    $images = $product->images()->first();
    $imagess = Image::where('status',1)->get();
        // dd($images);
        // $images = Image::where('status',1)->get();
        // dd($images);
    $thumbnails_active = $product->images()->first();

        // dd($product_discount);
    $thumbnails = $product->images;

    // dd($thumbnails);
        // dd($images->path);
    return view('frontend.product_detail2')->with([
        'product' => $product,
        'products' => $products,
        'productss' => $productss,
        'images' => $images,
        'categories' => $categories,
        'categoriess' => $categoriess,
        'thumbnails' => $thumbnails,
        'thumbnails_active'=>$thumbnails_active,
        'product_discount' => $product_discount,
        'items' => $items,
        'imagess' => $imagess,
        'total'=> $total,
        'arr_config' => $arr_config

    ]);
        // return view('frontend.product_detail');
}

public function cart()
{
    return view('frontend.cart2');
}

public function list($id)
{
    $category = Category::find($id);
    if ($category->depth == 0) {
        $categories = Category::where('parent_id',$category->id)->get();
        $category_condition = [];
        foreach ($categories as $key => $category) {
            $category_condition[]= $category->id;

        }
            // dd($category_condition);
        $productss = Product::whereIn('category_id',$category_condition)->orderBy('created_at','desc')->paginate(5);
    }else{
        $productss = Product::where('category_id',$id)->orderBy('created_at','desc')->paginate(5);
    } 
        // dd($productss);


    // $categories= Category::get();
    $items = Cart::content();
    $categories = Category::find($id);
        // $categoriess = Category::get();
    $product = Product::find($id);
        // $images = $product->images()->first();
    $images = Image::where('status',1)->get();
    $total = Cart::priceTotal();

        // dd($images);
    // $images = $products->images;
    // dd($images);
    // dd($categories);
    // $products = Product::orderBy('updated_at','desc')->Paginate(12);
    $products = $categories->products;
    // dd($products);


    return view('frontend.shop_list')->with([
        'categories' => $categories, 
        'products' => $products, 
            // 'categoriess' => $categoriess,
        'images' => $images,
        'items' => $items,
        'productss' => $productss,
        'total' => $total
        // 'thumbnails' => $thumbnails




    ]);
}

public function contact(){
 $items = Cart::content();
 $total = Cart::priceTotal();
        // dd($total);
 $images = Image::where('status',1)->get();
 $product_discount = Product::where('discount_percent','>',6)->take(5)->get();
        // dd($images);
 $products = Product::get();
   // return view('frontend.contact');


 return view ('frontend.contact')->with([
    'items' => $items,
    'images' => $images,
    'products' => $products,
    'total' => $total,
    'product_discount' => $product_discount


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


    public function get(Request $request){
        // $value = $request->session()->get('product');
        // // dd($value);
        $data = $request->session()->all(); // LAY RA HET DL
        // $data = $request->session()->forget('phone'); //XOA BO 
        dd($data);
        // if ($request->session()->has('name')) {
        //     echo "co";

        // }else{
        //     echo "ko";
        // }
        $value = $request->session()->pull('name','default');
        var_dump($value);

    }

    public function set(){
        // $cookie = cookie('giohang','1',10); C1
        // return response('hello')->cookie($cookie);

        // return response('hello word')->cookie( //C2 de luu du lieu bang cookie
        //     'giohang2','2',10);

        // Cookie::queue('user_id',1);
        Cookie::queue(Cookie::make('email', 'hel@gmal.com', 10));
        return 1;
    }

    public function getCookie(Request $request){
        $email = $request->cookie('email'); // C1
        // $email = Cookie::get('email');
        $user_id = Cookie::get('user_id'); // C2

        echo 'email:'.$email . "\n" .'<br>';
        echo "user_id :".$user_id ."\n" . '<br>';



    }
}
