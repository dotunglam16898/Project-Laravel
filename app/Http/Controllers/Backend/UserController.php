<?php

namespace App\Http\Controllers\Backend;
use App\User;
use App\User_info;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::get();
        $users = User::paginate(3);
        return view('backend.users.index')->with([
            'users' =>$users


        ]);

    //C1 : LAY userInfo theo user
        // $user = User::find(2);
        
        // $user_Info = $user->userInfo; // tro toi function userInfo trong model User

        // dd($user_Info);


        //C2 : Nguoc lai
        // $userInfo= User_info::find(1);
        
        // $user = $userInfo->user;
        // dd($user);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
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

    public function showProducts($id)
    {
        $user = User::find($id);
        // foreach ($user->products as $users ) {
        //     echo $users->name. '<br>';
        // }
        $products = $user->products;
        return view('backend.users.showProducts')->with([

            'user' => $user,
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
        //
    }
}
