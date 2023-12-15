<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

use Session;

use Stripe;


class HomeController extends Controller
{
    public function index() 
    {
        return view('home.userpage');
    }


    // public function why() 
    // {
    //     return view('home.why');
    // }

    // public function client() 
    // {
    //     return view('home.client');
    // }

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

    public function add_cart(Request $request, $id) 
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $product=product::find($id);
            $cart=new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_title = $product->title;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->duedate = $request->duedate;
            $cart->save();

            return redirect()->back();
        } 
        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id())
        {
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('home.showcart', compact('cart'));
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function order()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->duedate = $data->duedate;

            $order->rent_status='Sedang Dipinjam';
            $order->delivery_status='processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();

            $product = Product::find($cart->product_id);
            $product->decrement('quantity', $cart->quantity);
        }

        return redirect()->back();
    }

     public function checkout()
    {
        if (Auth::id())
        {
            // $id=Auth::user()->id;
            // $cart=cart::where('user_id','=',$id)->get();
            return view('home.checkout');
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function order_history() 
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $userid=$user->id;
            $order=order::where('user_id', '=', $userid)->get();
            return view('home.order_history', compact('order'));
        }
        
        else
        {
            return redirect('login');
        }
    }

    public function product_search(Request $request)
    {
        $search_text=$request->search;
        $product=product::where('title','LIKE','%'.$search_text.'%')->get();
        return view('home.productpage', compact('product'));
    }   


    // public function updateOrderStatus($id)
    // {
    //     $order = Order::findOrFail($id);
    //     $order->update(['delivery_status' => 'done']);

    //     // Redirect back or wherever appropriate
    //     return redirect()->back();
    // }

    public function updateStatus($id)
    {
        $order = Order::findOrFail($id);

        // Update delivery_status
        if ($order->delivery_status == 'processing') {
            $order->update(['delivery_status' => 'done']);
        }

        // Update rent_status
        if ($order->rent_status == 'Sedang Dipinjam') {
            $order->update(['rent_status' => 'Sudah Selesai']);
        }

        // Redirect back or wherever appropriate
        return redirect()->back();
    }

}
