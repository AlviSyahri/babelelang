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
                    <div>
                        <label for="kategori">Kategori: </label>
                        <select id="kategori" name="category_id">
                            <option value="">Choose</option>
                            @foreach($data as $data)
                                <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label>Kondisi Barang </label>
                    <div>
                        <span>
                            <input type="radio" name="product_condition" value="0">Bekas
                        </span>
                        <span>
                            <input type="radio" name="product_condition" value="1">Baru
                        </span>
                    </div>
                    <label>Berat barang</label>
                    <input type="number" placeholder="Contoh: 2" name="weight" />
                    <label>Harga Awal</label>
                    <input type="number" placeholder="Contoh: 500000" name="start_price" />
                    <label>Harga Akhir</label>
                    <input type="number" placeholder="Contoh: 500000" name="max_price" />
                    <label>Kelipatan Harga</label>
                    <input type="number" placeholder="Contoh: 5000" name="multiple_price" />
                    <label>Tanggal Berakhir Lelang </label>
                    <input type="date" name="expired_bid" />
                    <label>Foto Barang </label>
                    <input type="file" name="picture_name" />
                    <button class="btn-send-message disabled" type="submit" value="Register">Jual</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
@stop
