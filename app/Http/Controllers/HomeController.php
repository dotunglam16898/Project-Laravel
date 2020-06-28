<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        Storage::put('test1.txt', 'lam');
        dd();
        // $user = Auth::user();
        // if ($role == 1) {
        //     return view('backend.dashboard');
        // }
        // dd($user->name);
        // $users = DB::table('users')->get();
        //  $users = DB::table('users')->where('name','admin')->first();

        // dd($users);

        // DB::table('users')
        //     ->where('id', 1)
        //     ->update(['name' => "lâm"]);

        //     dd('ok');

        // DB::table('users')->where('id','2')->delete();
        // dd('ok xóa');

     $role= Auth::user()->role;

     if ($role == 1) {
        return view('backend.dashboard');
    }else{
     return view('frontend.home');
 }
        // return view('home');

         // return view('frontend.product_detail');
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
