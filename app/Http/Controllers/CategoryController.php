<?php

namespace App\Http\Controllers;

use App\Models\Acc;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList( $email,$password1)
    {
   
        $user = Acc::where('email', '=', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        if($user->userType==0)
        {
            return redirect('log');
        }
        $data = Category::get();
        return view('admin.category-list',compact('data','user'));
   
    }
     /**
     * Summary of add
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function Add($email,$password1)
    {
      
        $data = Acc::where('email', '=', $email)->first();
        if($data==null)
        {
            return redirect('log');
        }
        if($data->userType==0)
        {
            return redirect('log');
        }
        return view('admin.category-add',compact('data'));
    

    }
    /**
     * Summary of save
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {
        $pro = new Category();
        $pro->catID = $request->id;
        $pro->catName = $request->Name;
        $pro->catDescriptions = $request->Descriptions;
        $pro->save();
        return redirect()->back()->with('success', 'category added successfully!');
    }
      /**
     * Summary of delete
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        Category::where('catID','=',$id)->delete();
        return redirect()->back()->with('success', 'category deleted successfully!');
    }
    /**
     * Summary of edit
     * @param mixed $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($email,$password1,$id)
    {
       
        $user = Acc::where('email', $email)->first();
        if($user==null)
        {
            return redirect('log');
        }
        if($user->userType==0)
        {
            return redirect('log');
        }
        $data = Category::where('catID', $id)->first();
        return view('admin.category-edit', compact('data', 'user'));
   
}

    public function update(Request $request)
    {
        Category::where('catID', '=', $request->id)->update([
            'catName'=>$request->name,
            'catDescriptions'=>$request->Descriptions,
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
}
