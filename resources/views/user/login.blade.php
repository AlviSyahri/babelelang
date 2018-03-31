 @extends('layout.main')
@section('content')


 <!-- Login Registration Page Area Start Here -->
        <div class="login-registration-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="login-registration-field">
                            <h2 class="cart-area-title">Login</h2>
                            <form method="POST" action="/login">
                                @csrf
                                @if (session('alert'))
                                    <div class="alert alert-success">
                                        {{ session('alert') }}
                                    </div>
                                @endif
                                <label>Username or email address *</label>
                                <input type="text" placeholder="ex: felix@babelelang.com" name="email" />
                                <label>Password *</label>
                                <input type="password" placeholder="Password" name="password" />
								<span class="pull-left"><input type="checkbox" name="remember"/>Remember Me</span>
                                <a href="#"><label class="pull-right">Lost your password?</label></a>
                                <br>
								<br>
								<br>
                                <div>
                                    <button class="btn-send-message disabled" type="submit" value="Login">Login</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Registration Page Area End Here -->





@stop