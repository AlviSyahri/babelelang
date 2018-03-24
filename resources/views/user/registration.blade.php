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
                <h2 class="cart-area-title">Daftar</h2>
                <form enctype="true" method="POST" action="/registration">
                    @csrf
                    <label>Nama Lengkap</label>
                    <input type="text" placeholder="Nama Lengkap" name="nama" />
                    <label>E-mail </label>
                    <input type="text" placeholder="E-mail" name="email" />
                    <label>No Telepon</label>
                    <input type="text" placeholder="No Telepon" name="no_telepon" />
                    <label>Jenis Kelamin </label>
                    <div>
                        <span>
                            <input type="radio" name="jenis_kelamin" value="0"> Laki-laki
                        </span>
                        <span>
                            <input type="radio" name="jenis_kelamin" value="1">Perempuan
                        </span>
                    </div>
                    <label>Kata Sandi</label>
                    <input type="password" placeholder="Kata Sandi" name="password" />
                    <label>Konfirmasi Kata Sandi</label>
                    <input type="password" placeholder="Konfirmasi Kata Sandi" name="password_confirmation" />
                    <label>Alamat </label>
                    <input type="textarea" placeholder="Alamat" name="alamat" />
                    <label>Foto KTP </label>
                    <input type="file" name="image1" />  
                    <label>Foto Profil </label>
                    <input type="file" name="image" />
                    <button class="btn-send-message disabled" type="submit" value="Register">Daftar</button>
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
