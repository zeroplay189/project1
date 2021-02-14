<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'user' => User::all(),
        ];
        return view('user.index', $data);
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {


        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        //   $user->name = "Surachet";
        //$user->username="admin";
        // $user->email ="61123855@g.cmru.ac.th";
        // $user->password = Hash::make("1234");
        // $user->save();
        $user->save();

        return redirect('user');
    }
    public function edit($id)
    {
        $user = User::find($id);

        $data = [
            'user' => $user
        ];


        return view('user.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $user = new User();
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');
        //   $user->name = "Surachet";
        //$user->username="admin";
        // $user->email ="61123855@g.cmru.ac.th";
        // $user->password = Hash::make("1234");
        // $user->save();
        $user =  User::find($id);

        $user->name = $name;
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->email = $email;



        $user->save();


        return redirect('user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete($id);


        return redirect('user');
    }
}
