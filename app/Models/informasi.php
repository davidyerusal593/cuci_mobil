<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_info',
        'name' ,
        'keterangan' ,
        
        
    ];
    protected $primaryKey = 'id_info';

    protected $table = "informasi";
}

