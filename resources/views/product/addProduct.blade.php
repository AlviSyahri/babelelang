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
                <h2 class="cart-area-title">Detail Barang</h2>
                <form enctype="true" method="POST" action="{{url('/createProduct')}}">
                    @csrf
                    <label>Nama</label>
                    <input type="text" placeholder="Nama barang" name="product_name" />
                    <label>Deskripsi </label>
                    <input type="textarea" placeholder="Deskripsi barang" name="product_description" />
                    <label>Harga Awal</label>
                    <input type="number" placeholder="Contoh: 500000" name="start_price" />
                    <label>Harga Akhir</label>
                    <input type="number" placeholder="Contoh: 500000" name="max_price" />
                    <label>Kondisi Barang </label>
                    <div>
                        <span>
                            <input type="radio" name="product_condition" value="0"> Bekas
                        </span>
                        <span>
                            <input type="radio" name="product_condition" value="1">Baru
                        </span>
                    </div>
                    <label>Kelipatan Harga</label>
                    <input type="number" placeholder="Contoh: 5000" name="multiple_price" />
                    <label>Tanggal Berakhir Lelang </label>
                    <input type="date" name="expired_bid" />
                    <label>Foto Barang </label>
                    <input type="file" name="image1" />
                    <button class="btn-send-message disabled" type="submit" value="Register">Jual</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
@stop
