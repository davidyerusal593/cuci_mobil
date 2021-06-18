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
    <div class="card-header" align="center"><h3>Memberi gratis cuci</h3></div>
    <div class="card-body">
    <form method="POST" action="/admin/simpan_gratis">
    @csrf
        

    <div class="form-group">
            <label for="exampleFormControlInput1">Masukan Nama</label>
            <input type="text" style="width: 50%" class="form-control" name="name" id="name" placeholder="Isi Nama">
        </div> 
        <div class="form-group">
            <label for="exampleFormControlInput1">Masukan gratis cuci</label>
            <input type="text" style="width: 50%" class="form-control" name="informasi" id="informasi" placeholder="Isi gratis cuci">
        </div> 

        
               
        
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    </div>
    </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

@endsection