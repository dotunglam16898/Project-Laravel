<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Storage::put('abc/test2.txt', 'lamdo');
       // $check =  Storage::disk('public')->exists('abc/test3.txt','Dotunglam');
       // Storage::disk('public')->put('abc/test3.txt','Dotunglam');
        // dd($check);
        // dd('ok');
        // $contents = Storage::get('test3.txt');
        // dd($contents);
        // return Storage::disk('public')->download('abc/test3.txt');
        // $files =Storage::allFiles('public');
        // dd($files);

        // $files =Storage::makeDirectory('abcde');
        // dd($files);

        // $files =Storage::deleteDirectory('abcde');
        // dd($files);
        
        return view('frontend.home');
    }

     public function detail()
    {
        return view('frontend.product_detail');
    }

     public function cart()
    {
        return view('frontend.cart');
    }

     public function list()
    {
        return view('frontend.shop_list');
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
}
