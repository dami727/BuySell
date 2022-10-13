<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){ 
        return view('admin.auth.login');
    }
    public function postlogin(Request $request){
        $validated = $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);
        $email =$request->input('email');
        $password =$request->input('password');
        $admin = DB::table('admin')->select('*')->where('email', $email)->first();
        if($admin){
            if(Hash::check($password, $admin->password)){
                $data = array(
                    'email' => $email,
                    'name' => $admin->name,
                );
                $request->session()->put('admin', (object)$data);
                return redirect('admin_dashboard')->with('status', 'Welcome Back-'.$admin->name);
            }else{
                return redirect('admin')->withErrors(['error' => 'Wrong Password']);
            }
        }else{
            return redirect('admin')->withErrors(['error' => 'Wrong Email']);
        }
    }
}
