<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;


class HomeController extends Controller
{
    public function index() 
    {
        return view('home.userpage');
    }

    public function product() 
    {
        $product=Product::all();
        return view('home.productpage', compact('product'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        } 
        else
            {
                // return view('dashboard');
                return view('home.userpage');
            }
    }

    public function product_details($id) 
    {
        $product=product::find($id);
        return view('home.product_details', compact('product'));
    }
}
