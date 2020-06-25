<?php

namespace App\Http\Controllers\Backend;
use App\User;
use App\User_info;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $users = User::get();
        // $users = User::orderBy('created_at','asc')->get();
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

        $validatedData= $request->validate([
            'name' => 'required|min:6|max:255',
            'email' => 'required|email',
            'address' =>'required',
            'phone' => 'required|numeric|min:8|max:11',
            'role' => 'required',
            'password' => 'required|min:6|max:15|confirmed',
            // 'repassword' => 'required|password_confirmation'




        ]);

        $user = new User();
        $user->name = $request->get('name');

        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->role = $request->get('role');
        $user->password = $request->get('password');
        // $user->user_id = Auth::user()->id;
        $user->save();

        return redirect()->route('backend.user.index');
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
