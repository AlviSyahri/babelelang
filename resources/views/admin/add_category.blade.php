@extends('admin.layout.main')
@section('content')

		<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add Category</strong> Form
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <div class="form-group"><label for="nf-email" class=" form-control-label">ID Category</label><input type="text" value="1" class="form-control" disabled="disabled"><span class="help-block">Category Identity</span></div>
                          <div class="form-group"><label for="nf-password" class=" form-control-label">Category Name</label><input type="text" name="category_name" class="form-control"><span class="help-block">Masukan Nama Kategori Baru</span></div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@stop