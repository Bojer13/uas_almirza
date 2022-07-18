<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class admincontroller extends Controller
{
    public function view_category()
    {
        return view('category');
    }
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();

        return redirect()->back()->with('message', 'category added');
    }
    public function product()
    {
        return view('product');
    }
}
