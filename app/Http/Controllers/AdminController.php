<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;
use App\Models\Farmpedia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
       if (Auth::guard('admin')->check()) {
           return redirect()->route('admin.dashboard');
       }
    
       $check = $request->all();
       if (Auth::guard('admin')->attempt(['username' => $check['username'], 'password' => $check['password']])) {
           return redirect()->route('admin.dashboard')->with('success', 'Admin Login Success');
       } else {
           return back()->with('error', 'Invalid Username or Password');
       }
    }
    

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('success', 'Admin Logout Success');
    }
    public function dashboard()
    {
        $userCount = User::count();
        $farmpediaCount = Farmpedia::count();
        return view('admin.dashboard')->with('userCount', $userCount)->with('farmpediaCount', $farmpediaCount);
    }

    public function register(){
        if (Auth::guard('admin')->check()) {
            return redirect('/admin/dashboard');
        }
        return view('admin.register');
    }

    public function create(Request $request){
        //dd($request->all());
        Admin::insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login_form')->with('succes', 'Admin Created Successfully');
    }
}
