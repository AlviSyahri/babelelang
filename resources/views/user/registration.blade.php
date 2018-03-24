@extends('layout.main')
@section('content')

<!-- Inner Page Banner Area End Here -->
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    {{$errors->first()}}
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="login-registration-field">
                <h2 class="cart-area-title">Register</h2>
                <form enctype="true" method="POST" action="/registration">
                    @csrf
                    <label>Full Name </label>
                    <input type="text" placeholder="Full name" name="nama" />
                    <label>Email address </label>
                    <input type="text" placeholder="E-mail" name="email" />
                    <label>Phone Number </label>
                    <input type="text" placeholder="Phone Number" name="no_telepon" />
                    <label>Jenis Kelamin </label>
                    <input type="radio" name="jenis_kelamin" value="0"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="1">Perempuan
                    <label>Password </label>
                    <input type="password" placeholder="Password" name="password" />
                    <label>Password Confirmation</label>
                    <input type="password" placeholder="Password Confirmation" name="password_confirmation" />
                    <label>Alamat </label>
                    <input type="textarea" placeholder="alamat" name="alamat" />
                    <label>Foto KTP </label>
                    <input type="file" name="image1" />  
                    <label>Foto Profil </label>
                    <input type="file" name="image" />
                    <button class="btn-send-message disabled" type="submit" value="Register">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Login Registration Page Area End Here -->
<!-- Footer Area Start Here -->
<footer>

    @stop
