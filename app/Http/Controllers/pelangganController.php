<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pelanggan;
use App\Models\transaksi;


class pelangganController extends Controller
{
    public function index() {
        
        return view('pelanggan');   
    }

    public function pesan() {
        $pesan = DB::table('transaksi')->get();
        return view('pelanggan_pesan',['pesan'=>$pesan]);
    }
    public function pesanan() {
        $pesan = transaksi::all();
        return view('pelanggan_pesanan', compact('pesan'));      
    }
    
    public function rating(){
        return view('pelanggan_rating');
    }

    public function informasi() {
        return view('pelanggan_informasi');
    }

    public function simpanPesan(Request $request) {
        $pencucian = DB::table('transaksi')->where('name', $request->name)->count()+1;
        DB::table('transaksi')->insert([
            'tgl_cuci' => $request->tgl_cuci,
            'jam_cuci' => $request->jam_cuci,
            'petugas' => $request->petugas,
            'name' => $request->name,
            'nama_paket' => $request->nama_paket,
            'total_bayar' => $request->total_bayar,
            'no_plat' => $request->no_plat,
            'rating' => $request->rating,
            'keterangan' => $request->keterangan,
            'pencucian' => $pencucian,
            'bukti_bayar' => $request->bukti_bayar,
            'validasi' => 0,   
            'status' => 0
        ]);
        if($pencucian==11){
            return 'gratis cuci';
        }
        return redirect('/pelanggan/pesan');
    }

    public function edit($id_transaksi) {
        $pesan = transaksi::find($id_transaksi);
        return view('pelanggan_edit', ['pesan' => $pesan]);
    }


     public function updated($id_transaksi, Request $request) {
         $pesan = transaksi::find($id_transaksi);
         $pesan->rating = $request->rating;
         $pesan->keterangan = $request->keterangan;
         $pesan->tips = $request->tips;
         $pesan->save();
        
     return redirect("/pelanggan/pesanan");
     }

     public function opendokumen($dokumen)
    {
        $path = public_path('dokumen/' . $dokumen );
        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));
        readfile($path);
    }
    
   
}