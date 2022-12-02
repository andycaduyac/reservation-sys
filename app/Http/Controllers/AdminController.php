<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        if(auth()->check()){
            return redirect('/admin/dashboard');
        }

        return view('forms.login');
    }

    public function logInredirect(){
        return redirect()->to('/admin/login');
    }

    public function check_login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $login = auth()->attempt([
            'username' =>   $request->username,
            'password' =>   $request->password,

        ]);
        if(!$login){
            return back()->with('error', 'Invalid credentials');
        }

        return redirect('admin/dashboard');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        auth()->logout();

        return redirect('/admin/login');
    }
}
