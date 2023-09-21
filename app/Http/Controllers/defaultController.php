<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class defaultController extends Controller
{
    public function lobby()
    {
        $cat=Category::get();
        $data=Product::get();
        return view('default.index',compact('data','cat'));
    }
    public function productList()
    {
        $data=Product::get();
        return view('default.product-list', compact('data'));
    }
    public function singleProduct($id)
    {
        $data=Product::where('productID','=', $id)->first();
        return view('default.single-product',compact('data'));
    }
}
