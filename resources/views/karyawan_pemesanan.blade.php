@extends('layouts.layoutkaryawan')

@section('top')
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<br>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
          <h3 class="box-title">Pemesanan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
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
        <th scope="col">Rating</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>

        </tr>
    </thead>
            @php $no=1; @endphp
            @foreach($status as $s)
            <tr>
              <td scope="row"><?php echo $no++ ?></td>
              <td><?php echo $s->jam_cuci?></td>
              <td><?php echo $s->tgl_cuci?></td>
              <td><?php echo $s->petugas?></td>
              <td><?php echo $s->name?></td>
              <td><?php echo $s->nama_paket?></td>
              <td><?php echo $s->total_bayar?></td>
              <td><?php echo $s->no_plat?></td>
              <td><?php echo $s->bukti_bayar?></td>
              <td><?php echo $s->rating?></td>
              <td><?php echo $s->status?></td>
              <td>
              <a href="/karyawan/pemesanan/edit/{{ $s->id_transaksi }}" class="btn btn-success" data-toggle="tooltip" title="Edit" >Edit</i></a>
                  
              </td>            
            </tr>
            @endforeach
    <tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
           

</section>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

@endsection