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
                <h2 class="cart-area-title">Jual Barang</h2>
                <form enctype="true" method="POST" action="/productcreate">
                    @csrf
                    <label>Kategori</label>
                    <select>
  						<option value="pakaian">Pakaian</option>
  						<option value="elektronik">Elektronik</option>
  						<option value="perlengkapan_rumah">Perlengkapan Rumah</option>
  						<option value="kendaraan">Kendaraan</option>
					</select>
					<br>
                    <label>Nama Produk</label>
                    <input type="text" placeholder="Nama produk" name="product_name" />
                    <label>Deskripsi </label>
                    <input type="textarea" placeholder="Deskripsi produk" name="product_description" />
                    <label>Kondisi </label>
                    <div>
                        <span>
                            <input type="radio" name="product_condition" value="1"> Baru
                        </span>
                        <span>
                            <input type="radio" name="product_condition" value="2"> Bekas
                        </span>
                    </div>
                    <label>Harga Awal</label>
                    <input type="number" placeholder="Harga awal" name="start_price" />
                    <label>Tambah harga</label>
                    <input type="number" placeholder="Tambah harga contoh: 5000" name="multiple_price" />
                    <label> Harga Maksimal</label>
                    <input type="number" placeholder="Harga maksimal" name="max_price" />
                    <label>Berat</label>
                    <input type="number" placeholder="Berat (Kg)" name="weight" />
                    <label>Tanggal berakhirnya lelang</label>
                    <input type="date" placeholder="Tanggal berakhirnya lelang" name="expired_bid" />
                    <label>Foto Barang </label>
                    <input type="file" name="image" />
                    <button class="btn-send-message disabled" type="submit" value="addProduct">Tambah Barang</button>
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
