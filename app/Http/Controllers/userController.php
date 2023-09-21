<?php

namespace App\Http\Controllers;

use App\Models\Acc;
use App\Models\Category;
use App\Models\city;
use App\Models\Country;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function lobby($email,$password1)
    {   
  
        $cat = Category::get();
        $data = Product::get();
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        return view('customer.index', compact('user','data','cat'));
    
    }
    public function profile($email,$password1)
    {
       
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        $country = Country::where('CounID', '=', $user->CounID)->first();
        $city = city::where('CityID', '=', $user->CityID)->first();
        return view('customer.profile', compact('user','country','city'));
    
    }
    public function editAccount($email,$password1)
    {
    
        $cities = city::get();
        $countries = Country::get();
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        $country = Country::where('CounID', '=', $user->CounID)->first();
        $city = city::where('CityID', '=', $user->CityID)->first();
        return view('customer.edit-account', compact( 'user','country','city','countries','cities'));
  
    }
    public function save(Request $request)
    {
        $user = Acc::where('UserID', '=', $request->id)->first(); 
        if($user==null)
        {
            return redirect('log');
        }
        $rePass = $user->password;
        try{
        $city= city::where('CityID', '=', $request->City)->first(); 
        if ($request->Country != $city->CounID) {
            return redirect()->back()->with('error', 'Country and City must be the same.');
        }
    
        } catch(Exception $e) {
            return redirect()->back()->with('error', 'Country and City must be the same.');
        }
    
        if ($user->password != $request->password) {
            $rePass = hash('sha256', $request->password);
        }
        

    
        Acc::where('UserID', '=', $request->id)->update([
            'email' => $request->email,
            'password' => $rePass,
            'LastName' => $request->LastName,
            'FirstName' => $request->FirstName,
            'Gender' => $request->Gender,
            'CounID' => $request->Country,
            'CityID' => $request->City,
            'UserAddress' => $request->Address,
            'UserPhone' => $request->Phone,
        ]);
        
        return redirect()->back()->with('success', 'Account updated successfully!');
    }
    public function productList($email,$password1)
    {   
       
        $cat = Category::get();
        $data = Product::get();
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        return view('customer.product-list', compact( 'user','data','cat'));
  
    }
    public function productFilter($email,$password1,$id)
    {   
      
        $cat = Category::get();
        $data = Product::where('catID','=', $id)->get();
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        return view('customer.product-filter', compact( 'user','data','cat'));
    
    }
    public function productSearch($email, $password1 , $search)
    {   
      
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        $cat = Category::get();
        $data = Product::where('productName', 'LIKE', '%' . $search . '%')->get();
                    return view('customer.product-filter', compact('user', 'data', 'cat'));
                
    }
    public function singleProduct($email,$password1,$id)
    {   

        $cat = Category::get();
        $data = Product::where('productID', '=', $id)->first();
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        return view('customer.single-product', compact( 'user','data','cat'));
   
    }
    
}
