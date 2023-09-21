<?php

namespace App\Http\Controllers;

use App\Models\Acc;
use App\Models\Category;
use App\Models\city;
use App\Models\Country;
use App\Models\order;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard($email,$password1)
    {
        
        $cus= Acc::where('userType', '=', 0)->get();
        $data = Acc::where('email', '=', $email)->first();
        try{
        if($data->userType==0)
        {
            return redirect('log');
        }
        }catch (Exception){
            return redirect('log');
        }
        $order = order::get();
        return view('admin.index',compact('data','order','cus'));
    }
    public function profile($email,$password1)
    {
        
        $user = Acc::where('email', '=', $email)->first();
        try
        { if($user->userType==0)
        {
            return redirect('log');
        }
        }catch (Exception){
            return redirect('log');
        }
        $country = Country::get();
        $city= city::get();
        return view('admin.profile',compact('user','country','city'));
    }
    public function productList($email,$password1)
    {
        $user = Acc::where('email', '=', $email)->first();
        try
        {
            if($user->userType==0)
        {
            return redirect('log');
        }
        }catch (Exception){
            return redirect('log');
        }
        $data = Product::get();
        return view('admin.product-list',compact('data','user'));
    }
     /**
     * Summary of add
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function add($email,$password1)
    {
        $data = Acc::where('email', '=', $email)->first();
        try
        {if($data->userType==0)
        {
            return redirect('log');
        }
        } catch (Exception $e){
            return redirect('log');
        }
        $cat = Category::get();
        return view('admin.product-add', compact('cat', 'data'));
    }
    /**
     * Summary of save
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {
        
        
        $pro = new Product();
        $pro->productID = $request->id;
        $pro->productName = $request->Name;
        $pro->productPrice = $request->Price;
        $pro->productImage = $request->Image;
        $pro->productDetails = $request->Details;
        $pro->catID = $request->category;
        $pro->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }
    /**
     * Summary of delete
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        Product::where('productID','=',$id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
    /**
     * Summary of edit
     * @param mixed $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($email,$password1, $id)
    {
        $user = Acc::where('email', '=', $email)->first();
      try{

        if($user->userType==0)
            {
                return redirect('log');
            }
        
        }catch (Exception $e){
            return redirect('log');
        }
        $category = Category::get();
        $data = Product::where('productID', '=', $id)->first();
        return view('admin.product-edit', compact('data', 'category', 'user'));
    }
    public function update(Request $request)
    {
        $img = $request->new_image == "" ? $request->old_image : $request->new_image;
        Product::where('productID', '=', $request->id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productImage'=>$img,
            'productDetails'=>$request->details,
            'catID'=>$request->category,
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
    public function customerEdit($email,$password1, $id)
    {
        
        $user = Acc::where('email', '=', $email)->first();
      try{ if($user->userType==0)
        {
            return redirect('log');
        }
        }catch (Exception){
            return redirect('log');
        }
        $data = Acc::where('userID', '=', $id)->first();
        $country = Country::get();
        $city = city::get();
        return view('admin.customer-edit', compact('data', 'user','country','city'));
    }
    
    public function customerUpdate(Request $request)
    {
        $user = Acc::where('UserID', '=', $request->id)->first(); 
        if($user==null)
        {
            return redirect('log');
        }
        $rePass = $user->password;
        try
        {   
            $city= city::where('CityID', '=', $request->cityName)->first(); 
            if ($request->cityName != $city->CounID) {
                return redirect()->back()->with('error', 'Country and City must be the same.');
            }
        } catch(Exception $e) {
            return redirect()->back()->with('error', 'Error');
        }
        
        if($user->password!= $request->password)
        {
            $rePass =hash('sha256',$request->password);
        }
        Acc::where('UserID', '=', $request->id)->update([
            'email'=>$request->email,
            'password'=>$rePass,
            'LastName'=>$request->LastName,
            'FirstName'=>$request->FirstName,
            'Gender'=>$request->Gender,
            'CounID'=>$request->Country,
            'UserPhone'=>$request->phone,
            'UserAddress'=>$request->Address,
            'CityID'=>$request->cityName
        ]);
        return redirect()->back()->with('success', 'Account updated successfully!');
    }
    public function customerDelete($id){
        Acc::where('UserID','=',$id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
    public function customerlist($email,$password1)
    {
        $user = Acc::where('email', '=', $email)->first();
      try
      { 
        if($user->userType==0)
        {
            return redirect('log');
        }
        }catch (Exception){
            return redirect('log');
        }
        $data = Acc::get();
        $country=Country::get();
        $city = city::get();
        return view('admin.customer-list',compact('data','user','city','country'));
    }
    public function order($email,$password1)
    {
        $data = Acc::where('email', '=', $email)->first();
        try
        {
        if($data->userType==0)
        {
            return redirect('log');
        }
        }catch (Exception $e)
        {
            return redirect('log');
        }
        $cat= Category::get();
        $city = city::get();
        $country= Country::get();
        $order = order::get();
        $cus = Acc::get();
        return view('admin.customer-order',compact('order','data','cus','city','country','cat'));
    }
   
    public function orderStatusUpdate(Request $request)
    {
        order::where('orderID','=',$request->id)->update([
            'status'=>$request->status
        ]);
        return redirect()->back();
    }
}
