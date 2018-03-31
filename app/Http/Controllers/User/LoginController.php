<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
Use Hash;
Use Auth;
class LoginController extends Controller
{
    public function loginview(){
    	return view(login);
    }

    public function doLogin(Request $request){

        $users = User::where('email', $request->email)->first();


        if($users == true){
            if(Hash::check($request->password,$users->password)){
                if($users->role==1){
                    Auth::login($users);
                    return redirect('/');
                }
                else{
                    Auth::login($users);
                    return redirect('/admin');
                }
            }
            else{
                
                 return redirect()->back()->with('alert', 'Password Salah');
            }
        }
        else{
             return redirect()->back()->with('alert', 'Account tidak ada silahkan daftar');
        }

    }
}