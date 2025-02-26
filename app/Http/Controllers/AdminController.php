<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\product;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $request)
    {
       $data=new product;
       $image=$request->file;

       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('productimage',$imagename);
       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->description=$request->Description;
       $data->quantity=$request->quantity;

       $data->save();
       return redirect()->back()->with('message','Product Added Successfully');

    }
}
