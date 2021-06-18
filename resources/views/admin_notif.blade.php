@extends('layouts.layoutadmin')

@section('top')
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<br>

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

            <h3 class="box-title">Notifikasi</h3>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="/admin/input_gratis" class="small-box-footer">
              Tambah Data <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
<!-- ./col -->
</div>
<div class="box box-primary">
        <div class="box-header with-border">

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-bordered table-striped">
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Informasi</th>
                                            
                  </tr>
                
                  @foreach ($trans as $key)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $key->name}}</td>
                      <td>{{ $key->informasi}}</td>
                      

                      
                      
                  </tr>
                  @endforeach
                </table>
             </div>
              
          </div>
          
</div>
        <!-- ./col -->
@endsection