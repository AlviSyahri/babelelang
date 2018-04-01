<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class UpdateController extends Controller
{
	public function updateuserview(){
		return view('user/updateprofile');
	}
    public function updateuser(){
    	$message =[
   			'nama.required'						=>'Nama tidak boleh kosong',
   			'alamat.required'					=>'Alamat tidak boleh kosong',
   			'email.required'					=>'Email tidak boleh kosong',
   			'email.email'						=>'Format email salah',
   			'email.unique'						=>'Email sudah terdaftar',
   			'password.required'					=>'Password tidak boleh kosong',
   			'password.min'						=>'Password Minimal 6',
   			'password.confirmed'				=>'Password dan confirm password tidak sama',
   			'no_telepon.required'				=>'Nomor telepon tidak boleh kosong',
   			'no_telepon.between'				=>'Nomor telepon 10 sampai 20',
   			'dob.required'						=>'DOB tidak boleh kosong',
   			'password_confirmation.required'	=>'Password tidak boleh kosong',
        	'password_confirmation.min'		    =>'Password Minimal 6',
        	'jenis_kelamin.required'			=>'Jenis Kelamin harus dipilih'
   		];
   		$validator = Validator::make($request->all(),[
    		'nama'							    =>'required',
    		'email'							    =>'required|unique:msuser|email',
        	'no_telepon'						=>'required|between:9,21',
        	'alamat'						    =>'required',
    		'password'					 	    =>'required|min:6|confirmed',
    		'password_confirmation'		     	=>'required|min:6',
    		'jenis_kelamin'	           			=>'required'
    	],$message);

        if($validator->fails()){
          return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
        }
        else{
            $filename = "";
            $filename1= "";
            $path     ='User/Profile/';
            $path1    ='User/Ktp/';

            $image =  $request->file('image');
            $image1=  $request->file('image1');
            if($request->hasfile('image') && $request->hasfile('image1')){
                if($imagevalidator->fails()){
                    return redirect()
                        ->back()
                        ->withErrors($imagevalidator)
                        ->withInput();
                }
                else{
                    $filename       = $image->time().'-'.getClientOriginalName();
                    $filename1      = $image1->time().'-'.getClientOriginalName();
                    $image->move($path, $filename);
                    $image1->move($path1, $filename1);
                }
            }
            $data = User::where('user_id',$request->user_id)->update([
            	'nama'			=> $request->nama,
            	'alamat'		=> $request->alamat,
            	'email'			=> $request->email,
            	'password'		=> bcrypt($request->password),
            	'no_telepon'	=> $request->no_telepon,
            	'dob'			=> $request->dob,
            	'jenis_kelamin'	=> $request->jenis_kelamin,
            	'foto'			=> $filename,
            	'foto_ktp'		=> $filename1,

            ]);
            return redirect('/home');
        }
    }
}
