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

 <!-- <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Pesan Cucian Mobil</h3></div>

                <div class="card-body">
<form method="post" action="/admin/transaksi/simpanTrans">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Cuci</label>
            <input type="date" style="width: 50%" class="form-control" name="tgl_cuci" id="tgl_cuci" placeholder="Pilih Tanggal">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jam Cuci</label>
            <input type="time" style="width: 50%" class="form-control" name="jam_cuci" id="jam_cuci" placeholder="jam">
        </div>
        <label>Nama Petugas</label> 
        <br>
        <div class="form-group">    
            <select style="width: 50%" class="custom-select" name="petugas" id="petugas">
            <option selected>-Pilih Karyawan-</option>
            <option value="Joko">Joko</option>
            <option value="Budi">Budi</option>
            <option value="Budi">Abdul</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pelanggan</label>
            <input type="text" style="width: 50%" class="form-control" name="name" id="name" placeholder="Masukan Pelanggan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Plat</label>
            <input type="text" style="width: 50%" class="form-control" name="no_plat" id="no_plat" placeholder="Masukan No.plat">
        </div>
        <label>Pilih Paket</label> 
        <br>
        <div class="form-group">    
            <select style="width: 50%" class="custom-select" name="nama_paket" id="nama_paket">
            <option selected>-Pilih Paket-</option>
            <option value="Paket 1">Paket 1</option>
            <option value="Paket 2">Paket 2</option>
            <option value="Paket Reguler">Paket Reguler</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Total Bayar</label>
            <input type="text" style="width: 50%" class="form-control" name="total_bayar" id="total_bayar" placeholder="Total Bayar">
        </div>
        <div class="form-group">
            <input type="hidden" style="width: 50%" class="form-control" name="bukti_bayar" id="bukti_bayar" value="Cash">
        </div>
        <div class="form-group">
            <input type="hidden" style="width: 50%" class="form-control" name="validasi" id="validasi" value="Lunas">
        </div>
        <div class="form-group">
            <input type="hidden" style="width: 50%" class="form-control" name="rating" id="rating" value="Sangat Puas">
        </div>
        <div class="form-group">
            <input type="hidden" style="width: 50%" class="form-control" name="keterangan" id="keterangan" value="-">
        </div>
        <div class="form-group">
            <input type="hidden" style="width: 50%" class="form-control" name="pencucian" id="pencucian" value="0">
        </div>
        <div class="form-group">
            <input type="hidden" style="width: 50%" class="form-control" name="status" id="status" value="Diproses">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>       -->
 
    <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-6">
    <div class="card">
    <div class="card-header" align="center"><h3>Paket Relaks</h3></div>
    <div class="card-body">
    <form method="POST" action="/pelanggan/pesan/simpanPesan">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Cuci</label>
            <input type="date" style="width: 50%" class="form-control" name="tgl_cuci" id="tgl_cuci" placeholder="Masukan Tanggal">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jam Cuci</label>
            <input type="time" style="width: 50%" class="form-control" name="jam_cuci" id="jam_cuci" placeholder="Masukan Jam Cuci">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pelanggan</label>
            <input type="text" style="width: 50%" class="form-control" name="name" id="name" placeholder="Masukan Pelanggan">
        </div> 
        <div class="form-group">  
            <label>Pilih Petugas</label><br>
            <select style="width: 50%" class="custom-select" name="petugas" id="petugas">
            <option value="Joko">Joko</option>
            <option value="Budi">Budi</option>
            <option value="Abdul">Abdul</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" style="width: 50%" class="form-control" name="total_bayar" id="total_bayar" value="35000" readonly>
            <input type="hidden" style="width: 50%" class="form-control" name="nama_paket" id="nama_paket" value="Paket Relaks" readonly>
            
            <input type="hidden" style="width: 50%" class="form-control" name="validasi" id="validasi" value="Diproses">
            <input type="hidden" style="width: 50%" class="form-control" name="pencucian" id="pencucian" value="0">
            <input type="hidden" style="width: 50%" class="form-control" name="status" id="status" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="keterangan" id="keterangan" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="rating" id="rating" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="bukti_bayar" id="bukti_bayar" value="Cash">

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Plat</label>
            <input type="text" style="width: 50%" class="form-control" name="no_plat" id="no_plat" placeholder="Masukan No. Plat">
        </div>
        
        <button type="submit" class="btn btn-primary">Pesan</button>
    </form>
    </div>
    </div>
    </div>
<td><div class="col-md-6"><div class="card">
    <div class="card-header" align="center"><h3>Paket Reguler</h3></div>
    <div class="card-body">
    <form method="POST" action="/pelanggan/pesan/simpanPesan">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Cuci</label>
            <input type="date" style="width: 50%" class="form-control" name="tgl_cuci" id="tgl_cuci" placeholder="Masukan Tanggal">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jam Cuci</label>
            <input type="time" style="width: 50%" class="form-control" name="jam_cuci" id="jam_cuci" placeholder="Masukan Jam Cuci">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pelanggan</label>
            <input type="text" style="width: 50%" class="form-control" name="name" id="name" placeholder="Masukan Pelanggan">
        </div>
         
        <div class="form-group">  
            <label>Pilih Petugas</label> <br> 
            <select style="width: 50%" class="custom-select" name="petugas" id="petugas">
            <option value="Joko">Joko</option>
            <option value="Budi">Budi</option>
            <option value="Abdul">Abdul</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" style="width: 50%" class="form-control" name="total_bayar" id="total_bayar" value="50000" readonly>
            <input type="hidden" style="width: 50%" class="form-control" name="nama_paket" id="nama_paket" value="Paket Regular" readonly>
            
            <input type="hidden" style="width: 50%" class="form-control" name="validasi" id="validasi" value="Diproses">
            <input type="hidden" style="width: 50%" class="form-control" name="pencucian" id="pencucian" value="0">
            <input type="hidden" style="width: 50%" class="form-control" name="status" id="status" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="keterangan" id="keterangan" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="rating" id="rating" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="bukti_bayar" id="bukti_bayar" value="Cash">

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Plat</label>
            <input type="text" style="width: 50%" class="form-control" name="no_plat" id="no_plat" placeholder="Masukan No. Plat">
        </div>
        
        <button type="submit" class="btn btn-primary">Pesan</button>
    </form>
    </div>
    </div>
    </div></div></td>
<td><div class="col-md-6"><div class="card">
    <div class="card-header" align="center"><h3>Pesan Express</h3></div>
    <div class="card-body">
    <form method="POST" action="/pelanggan/pesan/simpanPesan">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Cuci</label>
            <input type="date" style="width: 50%" class="form-control" name="tgl_cuci" id="tgl_cuci" placeholder="Masukan Tanggal">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Jam Cuci</label>
            <input type="time" style="width: 50%" class="form-control" name="jam_cuci" id="jam_cuci" placeholder="Masukan Jam Cuci">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pelanggan</label>
            <input type="text" style="width: 50%" class="form-control" name="name" id="name" placeholder="Masukan Pelanggan">
        </div>
        <div class="form-group">  
            <label>Pilih Petugas</label>  <br>
            <select style="width: 50%" class="custom-select" name="petugas" id="petugas">
            <option value="Joko">Joko</option>
            <option value="Budi">Budi</option>
            <option value="Abdul">Abdul</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" style="width: 50%" class="form-control" name="total_bayar" id="total_bayar" value="80000" readonly>
            <input type="hidden" style="width: 50%" class="form-control" name="nama_paket" id="nama_paket" value="Paket Express" readonly>
            
            <input type="hidden" style="width: 50%" class="form-control" name="validasi" id="validasi" value="Diproses">
            <input type="hidden" style="width: 50%" class="form-control" name="pencucian" id="pencucian" value="0">
            <input type="hidden" style="width: 50%" class="form-control" name="status" id="status" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="keterangan" id="keterangan" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="rating" id="rating" value="-">
            <input type="hidden" style="width: 50%" class="form-control" name="bukti_bayar" id="bukti_bayar" value="Cash">

        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Plat</label>
            <input type="text" style="width: 50%" class="form-control" name="no_plat" id="no_plat" placeholder="Masukan No. Plat">
        </div>
        
        <button type="submit" class="btn btn-primary">Pesan</button>
    </form>
    </div>
    </div>
    </div></div></td>
    </div>
    </div>
    </div>
   

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

@endsection