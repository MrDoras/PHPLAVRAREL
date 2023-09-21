<?php

namespace App\Http\Controllers;
use App\Models\Acc;
use App\Models\city;
use App\Models\Country;
use App\User;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use illuminate\Support\Facades\View;

class loginController extends Controller
{
    //validation
    
    public function login(Request $request)
{
    if ($request->isMethod('post')) 
        {
            $email = $request->input("email");
            $password = $request->input("password");
            
            // Truy vấn sử dụng truy vấn tham số hóa
            $sql = "SELECT * FROM accs WHERE Email = '$email'";
            $user = DB::select($sql);
            foreach ($user as $users)
            {
                $hashedPassword = $users->password;
                $password1 =hash('sha256',$password);
               
                if ($password1 ==$hashedPassword)
                {
                    // Mật khẩu hợp lệ
                    $userType = $users->userType;
    
                    if ($userType == 0) {
                        return redirect("user/index/$email/$password1");
                    } else {
                        return redirect("admin/index/$email/$password1");
                    }
                }
            }
            // Mật khẩu không hợp lệ hoặc không tìm thấy người dùng
            return redirect("log")->withInput()->withErrors(["password" => "Invalid email or password"]);
        }
    
        return view('login');
   
}
public function register()
    {
        $cities = city::get();
        $countries = Country::get();
        return view('register',compact('countries','cities'));
    }
        /**
     * Summary of save
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
public function save(Request $request)
    {
        if ($request->password !== $request->passwordRegis2) {
            return redirect()->back()->with('Fail', 'Password not match');
        }
        try{
            $city= city::where('CityID', '=', $request->city)->first(); 
            if ($request->country != $city->CounID) {
                return redirect()->back()->with('error', 'Country and City must be the same.');
            }
        
            } catch(Exception $e) {
                return redirect()->back()->with('error', 'Country and City must be the same.');
        }
        
        $hashpass =hash('sha256', $request->password);
        
        $Gender = "";

        if (isset($_POST['gender'])) {
            $selectedGender = $_POST['gender'];

            if ($selectedGender === "Male") {
                $Gender = "Male";
            } elseif ($selectedGender === "Female") {
                $Gender = "Female";
            }
        }
        $data = Acc::where('email', $request->email)->first();
        
        if ($data) {
            return redirect()->back()->with('Fail', 'Email Already Existed');
        }
        $pro = new Acc(); 
        $pro->email = $request->email;
        $pro->password = $hashpass;
        $pro->UserType = 0;
        $pro->FirstName = $request->FirstName;
        $pro->LastName = $request->LastName;
        $pro->gender = $Gender;
        $pro->CounID = $request->country;
        $pro->CityID = $request->city;
        $pro->UserAddress = $request->address;
        $pro->UserPhone = $request->PhoneNumber;
        $pro->save();
        return redirect()->back()->with('success', 'Account create successfully!');
    }
}
