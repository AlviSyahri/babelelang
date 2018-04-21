<header>
    <div class="header-area-style1" id="sticker">
        {{-- header atas --}}
        <div class="header-top">
            {{-- header paling atas yang list abu --}}
            <div class="header-top-inner-top">
                <div class="container">
                    <div class="row">
                        {{-- kontak --}}
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="header-contact">
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="+1234567890"> 085 862 842 669</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> sevenplaces07@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- akun dan rp --}}
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="account-wishlist">
                                <ul>
                                    <li><a href="{{url('/register')}}"><i class="fa fa-user" aria-hidden="true"></i> Account</a></li>
                                    <li><a href="#">Rp. </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- logo + kotak search + cart + burger kanan --}}
            <div class="header-top-inner-bottom">
                <div class="container">
                    <div class="row">
                        {{-- logo --}}
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-area">
                                <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        {{-- kotak search --}}
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="search-area">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-control" placeholder="Cari Barang" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            {{-- dropdown search kategori --}}
                                            <div class="dropdown dropdown-lg">
                                                {{-- button kategori --}}
                                                <button type="button" class="btn btn-metro dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span>Kategori</span>
                                                    <i class="fa fa-caret-up" aria-hidden="true"></i>
                                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </button>
                                                {{-- isi dropdown dari kategori --}}
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <ul class="sidenav-nav">
                                                        <li><a href="#"><i class="flaticon-dress-1"></i>Women</a></li>
                                                        <li><a href="#"><i class="flaticon-polo"></i>Men</a></li>
                                                        <li><a href="#"><i class="flaticon-plug"></i>Electornics</a></li>
                                                        <li><a href="#"><i class="flaticon-necklace"></i>Jewellery</a></li>
                                                        <li><a href="#"><i class="flaticon-screen"></i>Computer</a></li>
                                                        <li><a href="#"><i class="flaticon-headphones"></i>Head Phone</a></li>
                                                        <li><a href="#"><i class="flaticon-transport"></i>Toys</a></li>
                                                        <li><a href="#"><i class="flaticon-fashion"></i>Shoes</a></li>
                                                        <li><a href="#"><i class="flaticon-dress"></i>Kid’s Wear</a></li>
                                                        <li><a href="#"><i class="flaticon-technology"></i>Mobile</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{-- button search --}}
                                            <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- cart + burger kanan --}}
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <ul class="header-cart-area">
                                {{-- cart full --}}
                                <li>
                                    <div class="cart-area">
                                        {{-- total barang di cart yang bulet --}}
                                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                        {{-- cart --}}
                                        <ul>
                                            {{-- barang di cart 1an --}}
                                            <li>
                                                {{-- barang di cart 1an --}}
                                                <div class="cart-single-product">
                                                    <div class="media">
                                                        {{-- gambar barang --}}
                                                        <div class="pull-left cart-product-img">
                                                            <a href="#">
                                                                <img class="img-responsive" alt="product" src="img/best-seller/4.jpg">
                                                            </a>
                                                        </div>
                                                        {{-- deskripsi barang --}}
                                                        <div class="media-body cart-content">
                                                            <ul>
                                                                {{-- nama barang --}}
                                                                <li>
                                                                    <h2><a href="#">Product Title Here</a></h2>
                                                                    <h3><span>Code:</span> STPT600</h3>
                                                                </li>
                                                                {{-- kuantiti --}}
                                                                <li>
                                                                    <p>X 1</p>
                                                                </li>
                                                                {{-- harga --}}
                                                                <li>
                                                                    <p>$49</p>
                                                                </li>
                                                                {{-- tombol hapus cart --}}
                                                                <li>
                                                                    <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- barang di cart 1an --}}
                                            <li>
                                                <div class="cart-single-product">
                                                    <div class="media">
                                                        <div class="pull-left cart-product-img">
                                                            <a href="#">
                                                                <img class="img-responsive" alt="product" src="img/best-seller/5.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body cart-content">
                                                            <ul>
                                                                <li>
                                                                    <h2><a href="#">Product Title Here</a></h2>
                                                                    <h3><span>Code:</span> STPT460</h3>
                                                                </li>
                                                                <li>
                                                                    <p>X 1</p>
                                                                </li>
                                                                <li>
                                                                    <p>$75</p>
                                                                </li>
                                                                <li>
                                                                    <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- box bawah cart buat total harga --}}
                                            <li>
                                                <span><span>Total Harga</span></span><span>$112.8</span>
                                            </li>
                                            {{-- tombol bayar + lihat keranjang --}}
                                            <li>
                                                <ul class="checkout">
                                                    <li><a href="cart.html" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Lihat Keranjang</a></li>
                                                    <li><a href="check-out.html" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Bayar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                {{-- burger kanan sebelah logo cart --}}
                                <li>
                                    <div class="additional-menu-area" id="additional-menu-area">
                                        <div id="mySidenav" class="sidenav">
                                            <a href="#" class="closebtn">×</a>
                                            <div class="sidenav-search">
                                                <div class="input-group stylish-input-group">
                                                    <input type="text" placeholder="Search Here . . ." class="form-control">
                                                    <span class="input-group-addon">
									                        <button type="submit">
									                            <span class="glyphicon glyphicon-search"></span>
                                                    </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <ul class="sidenav-login-registration">
                                                <li data-toggle="collapse" data-target="#login" class="collapsed">
                                                    <a href="#">Login<span class="arrow"></span></a>
                                                    <div class="collapse" id="login">
                                                        <div class="login-registration-field">
                                                            <form method="post">
                                                                <label>Username or email address *</label>
                                                                <input type="text">
                                                                <label>Password *</label>
                                                                <input type="password">
                                                                <button value="Login" type="submit" class="btn-side-nav disabled">Login</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-toggle="collapse" data-target="#registration" class="collapsed">
                                                    <a href="#">Registration<span class="arrow"></span></a>
                                                    <div class="collapse" id="registration">
                                                        <div class="login-registration-field">
                                                            <form method="post">
                                                                <label>User Name*</label>
                                                                <input type="text">
                                                                <label>E-mail address *</label>
                                                                <input type="email">
                                                                <label>Password *</label>
                                                                <input type="password">
                                                                <button value="Login" type="submit" class="btn-side-nav disabled">Register</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="ctg-name-title">Kategori</h3>
                                            <ul class="sidenav-nav">
                                                <li><a href="shop1.html">Women</a></li>
                                                <li><a href="shop2.html"><i class="flaticon-polo"></i>Men</a></li>
                                                <li><a href="shop3.html"><i class="flaticon-plug"></i>Electornics</a></li>
                                                <li><a href="shop4.html"><i class="flaticon-necklace"></i>Jewellery</a></li>
                                                <li><a href="shop5.html"><i class="flaticon-screen"></i>Computer</a></li>
                                                <li><a href="shop6.html"><i class="flaticon-headphones"></i>Head Phone</a></li>
                                                <li><a href="shop7.html"><i class="flaticon-transport"></i>Toys</a></li>
                                                <li><a href="shop1.html"><i class="flaticon-fashion"></i>Shoes</a></li>
                                                <li><a href="shop2.html"><i class="flaticon-dress"></i>Kid’s Wear</a></li>
                                                <li><a href="shop3.html"><i class="flaticon-technology"></i>Mobile</a></li>
                                            </ul>
                                            <!-- times-->
                                        </div>
                                        <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- header bawahnya / navbar--}}
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    {{-- kotak logo + kategori --}}
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <h2 class="category-menu-title close-on-tab"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>Kategori </h2>
                        {{-- logo --}}
                        <div class="logo-area">
                            <a href="index.html"><img class="img-responsive" src="img/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    {{-- navbar yang ada beranda dkk --}}
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li class="active"><a href="#">Beranda</a>
                                        
                                    </li>
                                    <li><a href="#">kategori</a>
                                        <ul class="mega-menu-area">
                                            <li>
                                                <a href="index.html">Fashion Pria</a>
                                                <a href="index2.html">Fashion Wanita</a>
                                                <a href="index3.html">Fashion Anak</a>
                                                
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Komputer</a>
                                                <a href="portfolio1.html">Laptop</a>
                                                <a href="portfolio2.html">Seluler</a>
                                               
                                            </li>
                                            <li>
                                                <a href="shop1.html">Kalung</a>
                                                <a href="shop2.html">Cincin</a>
                                                <a href="shop4.html">Jam Tangan</a>
                                               
                                            </li>
                                            <li>
                                                <a href="shop6.html">Sepatu Kets</a>
                                                <a href="shop7.html">Sepatu Formal</a>
                                                <a href="product-details1.html">Sandal</a>
                                                
                                            </li>
                                            <li>
                                               
                                                
                                            <li>
                                                <a href="check-out.html">Check Out</a>
                                                <a href="order-history.html">Order History</a>
                                                <a href="order-details.html">Order Details</a>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tentang</a></li>
                                    <li><a href="#">Kontak</a>
                                        <ul>
                                            <li><span><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:support@babelelang.com"> E-mail</a></span></li>
                                            <li><span><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:085862842669"> Telepon</a></span></li>
                                            <li><span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span></li>
                                            <li><span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span></li>
                                            <li><span><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start Here -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a href="#">Beranda</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                                <li><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                                <li class="has-child-menu"><a href="#">Demo</a>
                                                    <ul class="thired-level">
                                                        <li><a href="#">Demo 1</a></li>
                                                        <li><a href="#">Demo 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio2.html">Portfolio 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop1.html">Shop 1</a></li>
                                                <li><a href="shop2.html">Shop 2</a></li>
                                                <li><a href="shop3.html">Shop 3</a></li>
                                                <li><a href="shop4.html">Shop 4</a></li>
                                                <li><a href="shop5.html">Shop 5</a></li>
                                                <li><a href="shop6.html">Shop 6</a></li>
                                                <li><a href="shop7.html">Shop 7</a></li>
                                                <li><a href="product-details1.html">Shop Details 1</a></li>
                                                <li><a href="product-details2.html">Shop Details 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="login-registration.html">Login Registration</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="check-out.html">Check Out</a></li>
                                                <li><a href="order-history.html">Order History</a></li>
                                                <li><a href="order-details.html">Order Details</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </div>
    </div>
</header>
