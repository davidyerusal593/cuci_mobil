<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use App\Models\transaksi;

class adminController extends Controller
{
    public function index() {
        $admin = transaksi::paginate(5);
        return view('admin', ['admin' => $admin]);
    }    

    public function transaksi() {
        // return view('admin_trans');
        $trans = DB::table('transaksi')->get();
        return view('admin_trans',['trans'=>$trans]);
    }
    
    public function transtambah(){
        $trans = DB::table('transaksi')->get();
        return view('admin_transtambah',['trans'=>$trans]);
    }

    public function pendapatan() {
        return view('admin_pendapatan');
    }

    public function simpanTrans(Request $request) {
        $pencucian = DB::table('transaksi')->where('name', $request->name)->count()+1;
        DB::table('transaksi')->insert([
            'tgl_cuci' => $request->tgl_cuci,
            'jam_cuci' => $request->jam_cuci,
            'id_karyawan' => 0,
            'id_pelanggan' => 0,
            'id_paket' => 0,
            'petugas' => $request->petugas,
            'name' => $request->name,
            'nama_paket' => $request->nama_paket,
            'total_bayar' => $request->total_bayar,
            'no_plat' => $request->no_plat,
            'rating' => $request->rating,
            'keterangan' => $request->keterangan,
            'pencucian' => $pencucian,
            'bukti_bayar' => $request->bukti_bayar,
            'validasi' => $request->validasi,   
            'status' => $request->status
        ]);
        if($pencucian==11){
            return 'gratis cuci';
        }
        return redirect('/admin/transaksi');
    }

    public function edit($id_transaksi) {
        $trans = transaksi::find($id_transaksi);
        return view('admin_edit', ['trans' => $trans]);
    }


     public function updated($id_transaksi, Request $request) {
         $trans = transaksi::find($id_transaksi);
         $trans->validasi = $request->validasi;
         $trans->save();
        
     return redirect("/admin/transaksi");
     }


    public function opendokumen($dokumen)
    {
        $path = public_path('dokumen/' . $dokumen );
        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));
        readfile($path);
    }
    
}