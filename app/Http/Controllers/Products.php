<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectronicShop;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;



class Products extends Controller
{

    function Mobile(Request $request)
    {
        if (session('loger')) {
            return view('Mobiles.Products');
        } else {
            return view('login');
        }
    }



    function Register_(Request $request)
    {
        return view('register');
    }
    function Register(Request $request)
    {

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

    }
    function Login(Request $request)
    {
        return view('login');
    }
    function Login_(Request $request)
    {

        $id = ElectronicShop::where('email', $request->email)->first();
        if (!$id || !($request->password == $id->password)) {
            Alert::warning('Access Denied');
            return view('login');
        } else {
            $request->session()->put('loger', $id->email);
            Alert::success('Accessed');
            return redirect('/products-mobile');
        }

    }
    function LogOut(Request $request)
    {
        Alert::success('Log-Out');
        $request->session()->flush();
        return view('welcome');
    }
}