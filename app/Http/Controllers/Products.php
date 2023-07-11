<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectronicShop;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;



class Products extends Controller
{
    function Mobile()
    {
        return view('Mobiles.Products');
    }



    function Register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = new ElectronicShop;
            $request->validate([
                'role' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $data->role = $request['role'];
            $data->name = $request['name'];
            $data->email = $request['email'];
            $data->password = $request['password'];
            $data->save();
            Alert::success('Register Success');
            return redirect('login');
        } else {
            return view('register');
        }
    }
    function Login(Request $request)
    {
        if ($request->isMethod('post')) {
            $id = ElectronicShop::where('email', $request->email)->first();
            if (!$id || !($request->password == $id->password)) {
                Alert::warning('Access Denied');
                return view('login');
            } else {
                Alert::success('Accessed');
                return view('Mobiles.Products');
            }

        } else {
            return view('login');
        }
    }
}