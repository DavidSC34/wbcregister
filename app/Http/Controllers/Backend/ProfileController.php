<?php

namespace App\Http\Controllers\Backend;

use toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    //
    public function index()
    {
        return  view('admin.profile.index');
    }

    public function updateProfile( Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'=>['required','max:100'],
            'email'=>['required','email','unique:users,email,'.Auth::user()->id],
            'image'=>['image','max:2048']
        ]);

        $user = Auth::user();
        
        if($request->hasFile('image')){
            /**Logic to delete the previous image */
            if(File::exists(public_path($user->image)))
            {
                File::delete(public_path($user->image));
            }   
            $image = $request->image;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            $path = "/uploads/".$imageName;

            $user->image =$path;
        }

       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        toastr()->success('Profile updated sucessfully');
        return redirect()->back();
    }
    /** Update password */
    public function updatePassword(Request $request)
    {
            // dd($request->all());

            $request->validate([
                'current_password'=>['required','current_password'], //-> current_password, new rule in laravel 10  
                'password'=>['required','confirmed','min:8']
            ]);
            
            $request->user()->update([
                'password' =>bcrypt($request->password)
            ]);
            toastr()->success('Password updated sucessfully');
            return redirect()->back();
    }
}
