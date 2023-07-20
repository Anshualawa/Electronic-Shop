<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectronicShop;
use App\Models\AllProduct;
use App\Models\Customers;
use Nette\Utils\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;



class Products extends Controller
{
    function backbtn()
    {
        return back();
    }
    function home()
    {
        if (session('loger')) {
            $product = AllProduct::all();
            $data = compact('product');
            return view('home')->with($data);
        } else {
            return view('login');
        }
    }
    function Mobile(Request $request)
    {
        if (session('loger')) {
            $product = AllProduct::where('category', 'Smart Phone')->get();
            $data = compact('product');
            return view('Mobiles.Products')->with($data);
        } else {
            return view('login');
        }
    }
    function laptop()
    {
        if (session('loger')) {
            $product = AllProduct::where('category', 'laptop')->get();
            $data = compact('product');
            return view('Catogories.laptop')->with($data);
        } else {
            return view('login');
        }
    }
    function TVs()
    {
        if (session('loger')) {
            $product = AllProduct::where('category', 'TVs')->get();
            $data = compact('product');
            return view('Catogories.TVs')->with($data);
        } else {
            return view('login');
        }
    }

    function accessories()
    {
        if (session('loger')) {
            $product = AllProduct::where('category', 'accessories')->get();
            $data = compact('product');
            return view('Catogories.accessories')->with($data);
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
        // check email are uniq or not

        $id = ElectronicShop::where('email', $request->email)->first();
        if ($id) {
            Alert::warning('Already Used Email ID');
            return redirect()->back();
            // return view('login');
        } else {

            $data->role = $request['role'];
            $data->name = $request['name'];
            $data->email = $request['email'];
            $data->password = $request['password'];
            $data->save();
            Alert::success('Register Success');
            return redirect('login');
        }
    }

    // Customer Registration 

    function customer_register()
    {
        return view('customerRegister');
    }
    function customer_registerr(Request $request)
    {
        // echo '<pre>';
        // print_r($request->toArray());
        // exit;
        $data = new Customers;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // check email are uniq or not

        $id = Customers::where('email', $request->email)->first();
        if ($id) {
            Alert::warning('Already Used Email ID');
            return redirect()->back();
            // return view('login');
        } else {

            $data->customer_name = $request['name'];
            $data->gender = $request['gender'];
            $data->email = $request['email'];
            $data->phone = $request['phone'];
            $data->address = $request['address'];
            $data->date_of_birth = $request['birthday'];
            $data->password = $request['password'];
            $data->save();
            Alert::success('Register Success');
            return redirect('customer-login');
        }
    }



    // customer_login

    function customer_login(Request $request)
    {
        return view('customer-login');
    }
    function customer_login_(Request $request)
    {

        $id = Customers::where('email', $request->email)->first();
        if (!$id || !($request->password == $id->password)) {
            Alert::warning('Access Denied');
            return view('customer-login');
        } else {
            $request->session()->put('loger', $id->customer_name);
            $request->session()->put('role', 'customer');
            $request->session()->put('id', $id->id);
            $request->session()->put('email', $id->email);
            Alert::success('Accessed');
            return redirect('/products');
        }

    }

    // admin and seller login
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
        if (session('loger') && session('role') == 'saler' | session('role') == 'seller') {
            // Alert::success('Accessed');
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






        if ($request->file('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            echo '<pre>';
            // print_r($filename);
            $file->move('img/Product/', $filename);
            $product->file = $filename;
        } else {
            echo '<pre>';
            print_r($request->image);
            exit;
        }


        $product->save();
        Alert::success('Product Added Success');
        // $product = AllProduct::all();
        // $data = compact('product');
        // return redirect('/adminboard')->with($data);
        return redirect('/products');
    }

    function Dashboard()
    {
        if (session('role') == 'admin') {
            $product = AllProduct::all();
            $user = ElectronicShop::all();
            $customer = Customers::all();
            $data = compact('product', 'user','customer');
            return view('adminboard')->with($data);
        } else {
            Alert::success('Product Added Success');
            return redirect('/products-mobile');
        }
    }


    function productDetail($id)
    {
        if (session('loger')) {
            $product = AllProduct::where('seller_id', $id)->get();
            $user = Customers::all();
            $data = compact('product', 'user');

            return view('Users.ProductDetails')->with($data);
        } else {
            Alert::success('Product Added Success');
            return redirect(route('home'));
        }
    }


    function Payment($id)
    {
        if (session('loger')) {
            $product = AllProduct::find($id);
            $data = compact('product');
            return view('customComponent/payment')->with($data);
        } else {
            return redirect(route('home'));
        }
    }


}