@extends('layouts.layoutadmin')

@section('top')
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuci Mobil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>

<!-- Image and text -->

<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-6">
    <div class="card">
    <div class="card-header" align="center"><h3>Daftar User</h3></div>
    <div class="card-body">

<!-- <div class="row"> -->
    <form action="/admin/simpan_user" method="POST" class="form-horizontal">
    {{csrf_field()}}
        <div class="form-group">
            <div class="box box-default color-palette-box">
                    <div class="box-header with-border">
                    </div>
                        <div class="box-body">

                            <!-- /.col -->
                        
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-0 control-label">Nama User</label>
                            <div class="col-sm-0">
                                <input type="text"style="width: 100%" class="form-control" id="name" name="name">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-sm-0 control-label">Email</label>
                            <div class="col-sm-0">
                                <input type="text" style="width: 100%" class="form-control" id="email" name="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-0 control-label">Password</label>
                            <div class="col-sm-0">
                                <input type="password" style="width: 100%" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="" class="col-sm-0 control-label">Level</label>
                                <div class="col-sm-0">
                                        <select class="form-control" name="level" id="level">
                                            <option value="admin">Admin </option>
                                            <option value="karyawan">Karyawan</option>
                                            <option value="pelanggan">Pelanggan </option>
                                            
                                     
                                        </select>
                                </div>
                        </div>
                
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
                 
    

   

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

@endsection