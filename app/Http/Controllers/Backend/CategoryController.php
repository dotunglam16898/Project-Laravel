<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(6);
        return view('backend.categories.index')->with([
            'categories' => $categories


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([ // C1
            'name' => 'required|min:6|max:255',
            
            'parent_id' => 'required|numeric',
            'depth' => 'required|numeric',









        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $category->parent_id = $request->get('parent_id');
        $category->depth = $request->get('depth');

        $category->save();

        return redirect()->route('backend.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $category= Category::find($id);
        // dd($category);
        foreach($category->products as $products){ // Lay content cua tat ca cac ban ghi
            echo $products->content. '<br>';
        }
    }

    public function showProducts($id){
        $category = Category::find($id);
        // foreach ($category->products as $products ) {

        // }
        $products = $category->products;
        return view('backend.categories.showProducts')->with([

            'category' => $category,
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
        $category = Category::find($id);
        return view('backend.categories.edit')->with([
            'category' => $category

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
            'parent_id' => 'required|numeric',
            'depth' => 'required|numeric',
            




        ]);
        
        // Lấy dữ liệu từ Form
        $name = $request->get('name');
        $parent_id = $request->get('parent_id');
        $depth = $request->get('depth');
        $slug = $request->get('slug');
        // Cập nhật
        $category = Category::find($id);
        $category->name = $name;
        $category->parent_id = $parent_id;
        $category->depth = $depth;
        $category->slug = $slug;
        $category->save();
        return redirect()->route('backend.category.index');
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
