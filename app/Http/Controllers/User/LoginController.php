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
    	return view('user\login');
    }

    public function doLogin(Request $request){
    	$email		= $request->email;
    	$password	= $request->password;

    	$user = User::Where('email',$email)->first();

    	if($user == true){
    		if(Hash::check($password,$user->password)){
    			if ($user->user_activation	==	1) {
                    if($user->flag_delete == 0){
    				    Auth::Login($user);
    				    return redirect(url('/'));
                    }
                    else{
                        $data='Akun telah dihapus';
                        return $data;
                    }
    			}
    			else{
    				$data='User Belum Aktif';
    				return $data;
    			}
    		}else{
    				$data='Password salah!';
    				return $data;
    			}
    	}else{
    				$data='User Tidak ditemukan!';
    				return $data;
    			}
    }


}
