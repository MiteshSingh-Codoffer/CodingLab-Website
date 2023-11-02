<?php

namespace App\Http\Controllers;

use App\Models\Gallerys;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Insert data for signup
    public function signupUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required'
        ]);
        $user = DB::table('users')
            ->insert(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' =>Hash::make($request->password),
                    'created_at' => now(),
                    'updated_at' => now()
                ]

            );

             // Log the user in
           // dd(Auth::attempt($request->only('email','password')));
             if (Auth::attempt($request->only('email','password'))) {
                // Authentication was successful...
                return redirect('/');
            }
            // return redirect('/signup')->withError('Error');
    }

    // Insert data for gallerys
    public function insertUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $fileimage = "";
        $image = $request->image;
        if ($image) {
            $fileimage = time() . "-gallery." . $image->getClientOriginalExtension();
            $image->storeAs('/public/uploads', $fileimage);
        }
        $user = DB::table('gallerys')
            ->insert(
                [

                    'name' => $request->name,
                    'title' => $request->title,
                    'desc' => $request->desc,
                    'image' => $fileimage,
                    'created_at' => now(),
                    'updated_at' => now()
                ]

            );

        return redirect('/gallery');
    }

    // show to data for gallerys
    public function showUser()
    {
        $users = DB::table('gallerys')
            //->get();
            ->paginate(3);
        return view('gallerysview', ['gallery' => $users]);
    }
    // public function singleUser (string $id){
    //     $gallery = DB::table('gallerys')->where('id',$id)->get();
    //     return view('',[''=>$gallery]);
    // }

    public function deleteUser($id)
    {
        $users = Gallerys::find($id);
        if (!is_null($users)) {
            $users->delete();
        }
        return redirect('gallery');
    }

    // Update are find in database
    public function updateUser($id)
    {
        $users = Gallerys::find($id);
        if (is_null($users)) {
            return redirect('gallery');
        } else {
            // $data=compact('users');
            return view('updateview', ['data' => $users]);
        }
    }

    // Update are sending in Database
    public function sendUser($id, Request $request)
    {
        $fileName = $request->prevImg;
        if($request->img){
            if(Storage::disk('public')->exists("uploads/$fileName")){
                Storage::disk('public')->delete("uploads/$fileName");
            }
            $image = $request->img;
            $fileName = time()."-blog.".$image->getClientOriginalExtension();
            $image->storeAs('/public/uploads',$fileName);
        }

        $users = Gallerys::find($id);

    if (is_null($users)) {
        return redirect('gallery');
    }

        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'desc' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $users->name = $request->name;
        $users->title = $request->title;
        $users->desc = $request->desc;
        $users->image = $fileName;
        $users->save();
        return redirect('gallery');
    }

    // login page
    public function loginUser(Request $request){
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5',

        ]);
        // Log the user in

        if (Auth::attempt($request->only('email','password'))) {
            // Authentication was successful...
            return redirect('/');
        }
        return redirect('signup')->withError('Error');

    }

    public function logoutUser(){
        //Session::flush();
        Auth::logout();
        return redirect('/');

    }

}
