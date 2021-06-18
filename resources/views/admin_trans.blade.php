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
<section>
<div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Transaksi </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">

    <blockquote class="blockquote mt-3">
        <a class="btn btn-outline-primary" href="transaksi/transtambah" role="button">Tambah [+]</a>
        <a href="/transaksi/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

    </blockquote>

<form action="/admin/transaksi/searchBydate" method="POST"> 
@csrf
<div class='form-group'>
<label for="dari">Dari Tanggal</label>
<!-- <input type="date" class='form-control'id='from_date' name='from_date' value="{{request('from_date') ? request('from_date') : ''}}"> -->
<input type="date" class='form-control'id='from_date' name='from_date' value="{{date('Y-m-d')}}">&nbsp;

</div>
<div class='form-group'>
<label for="sampai">Sampai Tanggal</label>

<input type="date" class='form-control'id='to_date' name='to_date' value="{{date('Y-m-d')}}">&nbsp;

</div>

<button type="submit" name="filter" id="filter" value="admin_trans" class="btn btn-primary">Filter</button>

</form>


						
						

    
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No.</th>    
        <th scope="col">Jam</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Petugas</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Nama Paket</th>
        <th scope="col">Total Bayar</th>
        <th scope="col">No.Plat</th>
        <th scope="col">Bukti bayar</th>
        <th scope="col">Validasi Pembayaran</th>
        <th scope="col">Rating</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>



        </tr>
    </thead>
            <!-- @php $no=1; @endphp -->
            @foreach($trans as $t)
            <tr>
              <td scope="row"><?php echo $no++ ?></td>
              <td><?php echo $t->jam_cuci?></td>
              <td><?php echo $t->tgl_cuci?></td>
              <td><?php echo $t->petugas?></td>
              <td><?php echo $t->name?></td>
              <td><?php echo $t->nama_paket?></td>
              <td><?php echo $t->total_bayar?></td>
              <td><?php echo $t->no_plat?></td>
              <td><?php echo $t->bukti_bayar?>
              <a href="/admin/transaksi/opendokumen/{{$t->bukti_bayar }}" target="_blank" class="btn btn-primary">View<span class="glyphicon glyphicon-eye-open"></a>
              </td>
              @if($t->validasi == 0)
                  <td>Diproses</td>
                  @else 
                  <td>Lunas</td>
                  @endif               
              <td><?php echo $t->rating?></td>
              @if($t->status == 0)
                  <td>Diproses</td>
                  @else 
                  <td>Selesai</td> 
                  @endif  
              <td>
              <a href="/admin/transaksi/edit/{{ $t->id_transaksi }}" class="btn btn-success" data-toggle="tooltip" title="Edit" >Edit</i></a>
              
              </td> 
                        
            </tr>
            @endforeach
    <tbody>
        
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

@endsection