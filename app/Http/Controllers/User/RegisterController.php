<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Validator;
use Auth;
class RegisterController extends Controller
{
   	public function registerview(){
   	    return view('user\registration');
   	}

   	public function doRegister(Request $request){
   		$message =[
   			'nama.required'						        =>'Nama tidak boleh kosong',
   			'alamat.required'					        =>'Alamat tidak boleh kosong',
   			'email.required'					        =>'Email tidak boleh kosong',
   			'email.email'						          =>'Format email salah',
   			'email.unique'						        =>'Email sudah terdaftar',
   			'password.required'					      =>'Password tidak boleh kosong',
   			'password.min'						        =>'Password Minimal 6',
   			'password.confirmed'				      =>'Password dan confirm password tidak sama',
   			'no_telepon.required'				      =>'Nomor telepon tidak boleh kosong',
   			'no_telepon.between'				      =>'Nomor telepon 10 sampai 20',
   			'dob.required'						        =>'DOB tidak boleh kosong',
   			'password_confirmation.required'	=>'Password tidak boleh kosong',
        'password_confirmation.min'		    =>'Password Minimal 6',
        'jenis_kelamin.required'			    =>'Jenis Kelamin harus dipilih'
   		];
   		$validator = Validator::make($request->all(),[
    		'nama'							       =>'required',
    		'email'							       =>'required|unique:msuser|email',
        'no_telepon'						       =>'required|between:9,21',
        'alamat'						       =>'required',
    		'password'					 	     =>'required|min:6|confirmed',
    		'password_confirmation'		 =>'required|min:6',
    		'jenis_kelamin'	           =>'required'
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
            $data = new User; 
            $data->nama=$request->nama;
            $data->alamat=$request->alamat;
            $data->email=$request->email;
            $data->password=bcrypt($request->password);
            $data->no_telepon=$request->no_telepon;
            $data->dob=$request->dob;
            $data->jenis_kelamin=$request->jenis_kelamin;
            $data->foto=$filename;
            $data->foto_ktp=$filename1;
            $data->user_activation=0;
            $data->role=1;
            $data->dob="2015-10-28";
            $data->saldo=0;
            $data->flag_delete=0;
            $data->save();
            Auth::login($data);
            return view('index');
        }
    }
  }
