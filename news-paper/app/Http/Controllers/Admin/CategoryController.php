<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use Auth;

class CategoryController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function categories(){
        if (is_null($this->user) || !$this->user->can('category.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
            
        }
        $categories  = Category::orderBy('id','DESC')->get();
        return view("BackEnd.categories.categories")->with(compact('categories'));
    }

    public function updateCategoryStatus(Request $request){
    	if ($request->ajax()) {
    		$data = $request->all();
    		// echo "<pre>"; print_r($data); die;
    		if ($data['status']=="Active") {
    			$status = 0;
    		}else{
    			$status = 1;
    		}
    		Category::where('id',$data['category_id'])->update(['status'=>$status]);
    		return response()->json(['status'=>$status,'category_id'=>$data['category_id']]);
    	}
    }

    public function addEditCategory(Request $request, $id=null){
        
        if ($id=="") {
            if (is_null($this->user) || !$this->user->can('category.create' ))  {
                abort(403, 'Sorry !! You are Unauthorized to view any admin !');
                
            }
            $name ="Add Category";
            $category = new Category;
            $categorydata = array();
            $message ="Category Add Successfully!";
        }else{
            if (is_null($this->user) || !$this->user->can('category.edit' ))  {
                abort(403, 'Sorry !! You are Unauthorized to view any admin !');
                
            }
            $name ="Edit Category";
            $categorydata = Category::where('id',$id)->first();

            $category = Category::find($id);
            $message ="Category Update Successfully!";
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
// echo "<pre>"; print_r($data); die;
            $rulse = [
                'name' => 'required',
            ];

            $customMessage = [
                'name.required' =>'name is required',
            ];

            $this->validate($request,$rulse,$customMessage);


            $category->name = $data['name'];
            $category->status =1;
            $category->save();
            
            session()->flash('success', $message);
            return redirect("admin/categories");
        }
        
        return view('BackEnd.categories.add_edit_category')->with(compact('name','category','categorydata'));
    }


    public function deleteCategory($id){
        if (is_null($this->user) || !$this->user->can('category.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
            
        }
        Category::where('id',$id)->delete();
        session()->flash('success', 'Category has been deleted Successfully!');
        return redirect()->back();
    }



}
