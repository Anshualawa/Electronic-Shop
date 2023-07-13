<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectronicShop;
use App\Models\AllProduct;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;



class Products extends Controller
{

    function Mobile(Request $request)
    {
        if (session('loger')) {
            $product = AllProduct::all();
            $data = compact('product');
            return view('Mobiles.Products')->with($data);
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
            $request->session()->put('loger', $id->name);
            $request->session()->put('role', $id->role);
            $request->session()->put('id', $id->id);
            $request->session()->put('email', $id->email);
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



    // Products upload function 
    function upload_product(Request $request)
    {
        if (session('loger') && session('role') == 'saler' | session('role') == 'admin') {
            Alert::success('Accessed');
            return view('uploadproduct');
        } elseif (session('loger')) {
            Alert::warning('Only Admin and Seller can Add the product');
            $product = AllProduct::all();
            $data = compact('product');
            return view('Mobiles.Products')->with($data);
        } else {
            return view('login');
        }
    }

    function upload_product_(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'availability' => 'required',
        ]);

        $product = new AllProduct;
        $product->seller_id = session('id');
        $product->product_name = $request->product_name;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->availability = $request->availability;
        $product->ratings = $request->ratings;
        $product->special_offers = $request->special_offers;
        $product->warranty = $request->warranty;
        $product->accessories = $request->accessories;
        $product->save();
        Alert::success('Product Added Success');
        // $product = AllProduct::all();
        // $data = compact('product');
        // return redirect('/adminboard')->with($data);
        return redirect('/adminboard');
    }

    function Dashboard()
    {
        if (session('role') == 'admin') {
            $product = AllProduct::all();
            $data = compact('product');
            Alert::success('Product Added Success');
            return view('adminboard')->with($data);
        } else {
            Alert::success('Product Added Success');
            return redirect('/products-mobile');
        }
    }

}