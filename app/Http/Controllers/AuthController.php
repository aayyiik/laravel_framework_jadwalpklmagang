<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
  
        
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = $request->only('email','password');
        if(Auth::attempt($user)){
            $user = Auth::user();
            if($user->role_id=='6'){
                return redirect('/penjadwalan');
            }elseif($user->role_id=='4'){
                return redirect('/penjadwalanMahasiswa');
            }elseif($user->role_id=='5'){
                return redirect('/penjadwalanDosen');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
       
        // dd($request->all());


}
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();

        return redirect('/login');
    }

}
