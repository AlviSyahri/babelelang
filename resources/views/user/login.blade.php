@extends('layout.main')
@section('content')


 <!-- Login Registration Page Area Start Here -->
        <div class="login-registration-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="login-registration-field">
                            <h2 class="cart-area-title">Login</h2>
                            <form>
                                <label>Username or email address *</label>
                                <input type="text" placeholder="Name or E-mail" />
                                <label>Password *</label>
                                <input type="password" placeholder="Password" />
                                <label class="check">Lost your password?</label>
                                <button class="btn-send-message disabled" type="submit" value="Login">Login</button>
                                <span><input type="checkbox" name="remember"/>Remember Me</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Registration Page Area End Here -->





@stop