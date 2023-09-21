<?php

namespace App\Http\Controllers;

use App\Models\Acc;
use App\Models\Cart;
use App\Models\city;
use App\Models\Country;
use App\Models\order;
use App\Models\payment;
use Exception;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function cartList($email,$password1)
    {   
        
         
        
            $e = Acc::where('email', '=', $email)->first();
        if($e->email==null)
        {
            return redirect('log');
        }
       
        $user = Acc::where('email', '=', $email)->first();
        $data = cart::where('UserID', '=', $user->UserID)->get();
        return view('customer.cart-List', compact('user','data'));
        
    }
   public function Add(Request $request, $email,$password1)
   {
    
    $user = Acc::where('email', '=', $email)->first();
    if($user==null)
        {
            return redirect('log');
        }
    $data = cart::where('UserID', '=', $user->UserID)->get();
    foreach($data as $pro)
    { 
        if($request->id == $pro->productID )
        {   
            cart::where('cartID','=', $request->id)-> update([
                'quantity'=>($pro->quantity +$request->quantity),
                'UserID'=>($pro->UserID),
                'productID'=>($request->id),
                'productName'=>($request->Name),
                'productPrice'=>($request->Price),
                'productImage'=>($request->Image),
                'productDetails'=>($request->Details),
                'catID'=>($request->category)
            ]);
            return redirect()->back()->with('success', ' add to cart successfully!');
        }else
        {
            $pro = new Cart();
            $pro->quantity = $request->quantity;
            $pro->UserID = $request->UserID;
            $pro->productID = $request->id;
            $pro->productName = $request->Name;
            $pro->productPrice = $request->Price;
            $pro->productImage = $request->Image;
            $pro->productDetails = $request->Details;
            $pro->catID = $request->category;
            $pro->save();
            return redirect()->back()->with('success', ' add to cart successfully!');  
         }
         
    }
        $pro = new Cart();
            $pro->quantity = $request->quantity;
            $pro->UserID = $request->UserID;
            $pro->productID = $request->id;
            $pro->productName = $request->Name;
            $pro->productPrice = $request->Price;
            $pro->productImage = $request->Image;
            $pro->productDetails = $request->Details;
            $pro->catID = $request->category;
            $pro->save();
            return redirect()->back()->with('success', ' add to cart successfully!');   
    
}
    public function purchase(Request $request,$email,$password1)
    {   
        $user= Acc::where('email', '=',$email)->first();
        $password1= $user->password;
        if($request->cartID =="Buy")
        {
            Payment::truncate();
            $pro = new payment();
            $pro->CartID = 1;
            $pro->quantity = 1;
            $pro->UserID = $request->UserID;
            $pro->productName = $request->Name;
            $pro->productPrice = $request->Price;
            $pro->productImage = $request->Image;
            $pro->productDetails = $request->Details;
            $pro->catID = $request->category;
            $pro->save();
            return redirect("user/index/payment/$email/$password1");
        }
       
        if($request->cartID!=null)
        {
            
            $cartIDs=$request->cartID;
            $quantities = $request->quantity;
            Payment::truncate();//xóa data trước đó của payment
            foreach ($cartIDs as $index => $cartID) {
            $data = cart::where('CartID', '=', $cartID)->first();
            $pro = new payment();
            $pro->CartID = $cartID;
            $pro->quantity = $quantities[$index];
            $pro->UserID = $data->UserID;
            $pro->productName = $data->productName;
            $pro->productPrice = ($data->productPrice*$quantities[$index]);
            $pro->productImage = $data->productImage;
            $pro->productDetails = $data->productDetails;
            $pro->catID = $data->catID;
            $pro->save();
            }
            
        
            return redirect("user/index/payment/$email/$password1");
        }

        return redirect()->back();  
    }
    public function cartDelete($id,$catID){

        cart::where([
            ['CartID', '=', $id],
            ['catID', '=', $catID]
        ])->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
    public function payment($email,$password1)
    {
        try{
        $user = Acc::where('email', '=', $email)->first();
        }catch(Exception $e)
        {
            return redirect('log');
        }
        
        $data = payment::where('UserID', '=', $user->UserID)->get();
        return view('customer.purchase',compact('data','user'));
    }
    public function deleteOrder($email,$password1,$id)
    {
       
        order::where('orderID','=',$id)->delete();
        return redirect()->back();
    }
    public function paymentSave(Request $request, $email,$password1)
    {   
      
        Payment::truncate();
        $PaymentIDs = $request->id;
        $quantities = $request->quantity;
        $UserIDs = $request->UserID;
        $productNames = $request->productName;
        $productPrices = $request->productPrice;
        $productImages = $request->productImage;
        $productDetails = $request->productDetails;
        $catIDs = $request->catID;
    
        foreach ($PaymentIDs as $index => $PaymentID) { 
            cart::where([
                ['productName', '=', $productNames[$index]],
                ['productImage', '=', $productImages[$index]],
                ['productDetails', '=', $productDetails[$index]],
                ['catID', '=', $catIDs[$index]]
            ])->delete();         
                $order = new order();
                $order->status ="Processing";
                $order->quantity = $quantities[$index];
                $order->UserID = $UserIDs[$index];
                $order->productName = $productNames[$index];
                $order->productPrice = $productPrices[$index] * $quantities[$index];
                $order->productImage = $productImages[$index];
                $order->productDetails = $productDetails[$index];
                $order->catID = $catIDs[$index];
                $order->save();
            }
        return redirect()->back()->with('success', 'Order successfully!');
    }
    public function order($email,$password1)
    {
        
        $city = city::get();
        $country = Country::get();
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        $data = order::where('UserID', '=', $user->UserID)->get();
        return view('customer.order',compact('data','user','city','country'));
   
    }
}
