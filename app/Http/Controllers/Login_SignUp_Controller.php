<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\external_db;
use Hash;
use Session;

class Login_SignUp_Controller extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function signup()
    {
        return view("signup");
    }

    public function signupUser(Request $request)
    {
        $request->validate([
            'nid'=>'required|digits:10|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'phone'=>'required|digits:11|unique:users',
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required'
        ]);

        $register = external_db::where('nid','=',$request->nid)->first();
        if ($register)
        {
            $user= new users();
            $user->nid = $request->nid;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->address = $request->address;
            $user->save();
            return back()->with("success", "Registration Done");
        }

        else
        {
            return back()->with('fail', 'Nid Does not Exist');
        }

        
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'nid'=>'required|digits:10|',
            'password'=>'required'
        ]);

        $user = users::where('nid','=',$request->nid)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);

                return redirect('user-dashboard');
            }
            else {
                return back()->with('fail', 'Wrong Password');
            }
        }
        else {
            return back()->with('fail', 'NID is not registered'); 
        }
    }

    public function userDashboard()
    {   
        $id = session()->get('loginId');
        $nid = users::where('id','=',$id)->pluck('nid')->first();
        $fname = users::where('id','=',$id)->pluck('fname')->first();
        return view("user_dashboard",compact('nid','fname'));

    }

    public function logoutUser() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}

