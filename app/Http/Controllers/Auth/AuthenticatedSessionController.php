<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Redirect;
use Illuminate\Support\Facades\Hash;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone'       => 'required',
            'ver_code'    => 'required',
            'email'       => 'required',
            'password'    => 'required',
            'account_type'    => 'required',
           
        ]);
        $data = array (
            'phone'           => $request->input('phone'),
            'ver_code'        => $request->input('ver_code'),
            'email'           => $request->input('email'),
            'password'        => Hash::make($request->input('password')),
            'rafer_code'      => $request->input('rafer_code'),
            'account_type'    => $request->input('account_type'),
            'created_at'      => Carbon::now(),
            'updated_at'      => Carbon::now(),
        );
        $insert = DB::table('buyers')->insert($data);
        if($insert){
             return redirect('login')->with('status', 'Successfully Added');
        }else{
             return redirect('login')->with('error', 'Something Went Wrong');
        }
        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function postlogin(Request $request){
        $validated = $request->validate([
            'email'       => 'required',
            'password'    => 'required',
            'account_type'    => 'required',

        ]);
        $email =$request->input('email');
        $password =$request->input('password');
        $account_type =$request->input('account_type');
        $buyer = DB::table('buyers')->select('*')->where('email', $email)->first();
        dd($buyer);
        if($buyer){
            if(Hash::check($password, $buyer->password)){
                $data = array (
                    'email' => $email,
                    'account_type' => $account_type,
                );
                $request->session()->put('buyer', (object)$data);
                return redirect('dashboard')->with('status', 'Welcome Back to buyer ');
            }else{
                return Redirect::back()->withErrors(['error' => 'Wrong Password']);
            }
        }else{
            return Redirect::back()->withErrors(['error' => 'Wrong Email']);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
