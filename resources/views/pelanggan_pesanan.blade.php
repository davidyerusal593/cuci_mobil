@extends('layouts.layoutpelanggan')

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
          <h3 class="box-title">Pesanan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tbody>
            <tr>
              <th style="width: 15px">No</th>
              <th>Jam</th>
              <th>Tanggal</th>
              <th>Karyawan</th>
              <th>Nama Paket</th>
              <th>Bukti Bayar</th>
              <th>Tips</th>
              <th>Validasi Pembayaran</th>
              <th>Rating</th>
              <th>keterangan</th>
              <th>Pencucian</th>
              <th>Status</th>
              <th>Aksi</th>

            </tr>

            @php $no=1; @endphp
            @foreach($pesan as $p)
            <tr>
              <td scope="row"><?php echo $no++ ?></td>
              <td><?php echo $p->jam_cuci?></td>
              <td><?php echo $p->tgl_cuci?></td>
              <td><?php echo $p->petugas?></td>
              <td><?php echo $p->nama_paket?></td>
              <td><?php echo $p->bukti_bayar?>
              
              <a href="/pelanggan/pesan/opendokumen/{{$p->bukti_bayar }}" target="_blank" class="btn btn-primary">View<span class="glyphicon glyphicon-eye-open"></a>

              </td>
              <td><?php echo $p->tips?>
                @if($p->validasi == 0)
                  <td>Diproses</td>
                  @else 
                  <td>Lunas</td>

              <td><?php echo $p->rating?></td>
              <td><?php echo $p->keterangan?></td>
              <td><?php echo $p->pencucian?></td>
              @if($p->status == 0)
                  <td>Diproses</td>
                  @else 
                  <td>Selesai</td>              
              <td>
              <a href="/pelanggan/pesan/edit/{{ $p->id_transaksi }}" class="btn btn-success" data-toggle="tooltip" title="Edit" >Edit</i></a>
                  
              </td>
              @endif
              @endif
            </tr>
            @endforeach
            </tbody>
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