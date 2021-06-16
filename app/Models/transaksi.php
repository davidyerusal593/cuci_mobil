<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi',
        'tgl_cuci' ,
        'jam_cuci' ,
        'petugas',
        'name',
        'nama_paket' ,
        'total_bayar' ,
        'no_plat' ,
        'bukti_bayar',
        'validasi',
        'rating',
        'keterangan',
        'pencucian',
        'status', 
        
    ];
    protected $primaryKey = 'id_transaksi';

    protected $table = "transaksi";
}

