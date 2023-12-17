<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Mpdf\Mpdf;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();

        return view('admin.category', compact('data'));
    }
    
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category added succesfully');
    }

    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted succesfully');
    }

    public function view_product()
    {
        $category=category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product=new product;
            $product->title=$request->title;
            $product->description=$request->description;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->category=$request->category;
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $product->image=$imagename;
            $product->save();
        
        // return redirect('/view_product');
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function view_product_list()
    {
        $product=product::all();
        $category = category::all();
        return view('admin.view_product', compact('product', 'category'));
    }

    public function order_product()
    {
        $order=order::all();
        return view('admin.order', compact('order'));
    }
    public function users()
    {
        $user=user::all();
        return view('admin.users', compact('user'));
    }

    public function view_pdf()
    {
        // $mpdf = new Mpdf();

        // // Write some HTML code:
        // $mpdf->WriteHTML('Hello World');

        // // Output a PDF file directly to the browser
        // $mpdf->Output();
        $user=user::all();
        return view('admin.print_pdf', compact('user'));

    }
}
