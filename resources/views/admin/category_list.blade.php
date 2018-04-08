@extends('admin.layout.main')
@section('content')


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Category List</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kategori</a></li>
                            <li><a class="active">Semua Kategori</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Semua Kategori </h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example" class="table display table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama Sub Kategori</th>
                                                <th>Nama Kategori</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Sub Kategori</th>
                                                <th>Nama Kategori</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
												<td>Handphone</td>
                                                <td>Elektronik</td>
                                            </tr>
											<tr>
                                                <td>Televisi</td>
												<td>Elektronik</td>
                                            </tr>
                                            <tr>
                                                <td>Baju Wanita</td>
												<td>Fashion</td>
                                            </tr>
											<tr>
												<td>Baju Banci</td>
                                                <td>Fashion</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@stop