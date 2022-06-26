<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
use Auth;
use Image;

class AdminController extends Controller
{
    public function dashboard(){
        return view("BackEnd.dashboard");
    }

    public function login(Request $request){
        if ($request->isMethod('post')) {
    		$data = $request->all();
            // echo "<pre>"; print_r($data); die;
    		$rulse = [
    			'email' => 'required|email|max:255',
		        'password' => 'required',
    		];

    		$customMessage = [
    			'email.required' =>'Email is required',
    			'email.email' =>'Valid Email is password',
    			'password.required' =>'password is required',
    		];

    		$this->validate($request,$rulse,$customMessage);

    		if (Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])) {
    			return redirect('admin/dashboard');
    		}else{
				toastr()->error('Invalide Email or Password!');
    			return redirect()->back();
    		}
    	}
        return view("BackEnd.login");
    }

	public function profile(Request $request){
		if ($request->isMethod('post')) {
            $data = $request->all();
			// echo "<pre>"; print_r($data); die;
            $rulse = [
                'name' => 'required',
				'address' => 'required',
				'location' => 'required',
                'mobile' => 'required|numeric',
            ];

            $customMessage = [
                'name.required' =>'name is required',
				'address.required' =>'address is required',
				'location.required' =>'location is required',
                'mobile.required' =>'mobile is required',
                'mobile.numeric' =>'Valid mobile is required',
            ];

            $this->validate($request,$rulse,$customMessage);

            if ($request->hasFile('image')) {
                $image_temp = $request->file('image');
                if ($image_temp->isValid()) {

                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extention;
                    $imagePath = 'uploads/profile/'.$imageName;
                    Image::make($image_temp)->save($imagePath);
                }
            }else if(!empty($data->image)){
				$imageName = $data->image;
			}else{
				$imageName = "";
			}

            Admin::where('email',Auth::guard('admin')->user()->email)->update(['name'=>$data['name'],'bio'=>$data['bio'],'mobile'=>$data['mobile'],'address'=>$data['address'],'location'=>$data['location'],'facebook'=>$data['facebook'],'twitter'=>$data['twitter'],'linkdin'=>$data['linkdin'],'instagram'=>$data['instagram'],'image'=>$imageName]);
			toastr()->success('User Detaisl has been updated Successfully!');
            return redirect()->back();
        }
		$admin = Admin::first();
		return view("BackEnd.profile.profile")->with(compact('admin'));
	}

	public function deleteProfileImage($id){
		$porfileImage = Admin::select('image')->where('id',$id)->first();

        $portfolio_image_path = "uploads/profile/";
        if (file_exists($portfolio_image_path.$porfileImage->image)) {
            unlink($portfolio_image_path.$porfileImage->image);
        }

        Admin::where('id',$id)->update(['image'=>'']);
		toastr()->success('Portfolio Image has been deleted Successfully!');
        return redirect()->back();
	}

	public function chkPassword(Request $request){

        $data = $request->all();

        // echo "<pre>"; print_r($data);

        $current_password = $data['current_pwd'];

        if(Hash::check($current_password,Auth::guard('admin')->user()->password)){
            echo "true"; die;
        }else {
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();

            if(Hash::check($data['current_pwd'],Auth::guard('admin')->user()->password)){

                if ($data['new_pwd']==$data['confirm_pwd']) {
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_pwd'])]);
					toastr()->success('Password has been updated Successfully!');
                }else{
				   toastr()->error('new Password & confirm password not match!');
                }

            }else {
				toastr()->error('Incorrect Current Password!');
            }
           return redirect()->back();
      }
    }
    public function logout(){
		Auth::guard('admin')->logout();
    	return redirect('/admin');
	}
}
