@extends('layout.main')
@section('content')


 <!-- Login Registration Page Area Start Here -->
        <div class="login-registration-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="login-registration-field">
                            <h2 class="cart-area-title">Masuk</h2>
                            <form method="POST" action="/doLogin">
                                @csrf
                                <label>Alamat Email</label>
                                <input type="text" placeholder="ex: felix@babelelang.com" />
                                <label>Kata Sandi</label>
                                <input type="password" placeholder="Password" />
								<span class="pull-left"><input type="checkbox" name="remember"/>Ingat Saya?</span>
                                <a href="#"><label class="pull-right">Lupa Kata Sandi?</label></a>
                                <br><br><br>
                                <div>
                                    <button class="btn-send-message disabled" type="submit" value="Login">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Registration Page Area End Here -->
@stop