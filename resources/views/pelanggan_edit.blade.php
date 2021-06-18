@extends('layouts.layoutpelanggan')

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


<section class="jumbotron">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Berikan Rating Dan Ulasan Anda</h3></div>

                <div class="card-body">
                <form method="POST" action="/pelanggan/pesan/updated/{{ $pesan->id_transaksi }}">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id_transaksi" id="id_transaksi" value="{{ $pesan->id_transaksi }}">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Rating</label>
                        <select class="form-control" name="rating" id="rating">
                            <option value="1" @php if(($pesan->rating)=='Sangat tidak puas') echo 'selected' @endphp>Sangat tidak puas</option>
                            <option value="2"@php if(($pesan->rating)=='Tidak puas') echo 'selected' @endphp>Tidak puas</option>
                            <option value="3" @php if(($pesan->rating)=='Sedang') echo 'selected' @endphp>Sedang</option>
                            <option value="4"@php if(($pesan->rating)=='Puas') echo 'selected' @endphp>Puas</option>                        
                            <option value="5" @php if(($pesan->rating)=='Sangat Puas') echo 'selected' @endphp>Sangat Puas</option>                    
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Ulasan</label>
                        <input type="textarea" style="width: 100%" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Ulasan">
                    </div>
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tips</label>
                        <input type="textarea" style="width: 100%" class="form-control" name="tips" id="tips" placeholder="tips" value= "{{ $pesan->tips }}">
                    </div>

                </div>

            </div>
                
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
            <!-- End Form -->
            
        </div>
    </div>
           
</div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

@endsection