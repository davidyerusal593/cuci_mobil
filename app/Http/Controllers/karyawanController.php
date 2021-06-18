<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\karyawan;
use App\Models\transaksi;
use App\Models\pendapatan1;


class karyawanController extends Controller
{
    public function index() {
        
        return view('karyawan');   
    }

    public function pemesanan() {
        $status = DB::table('transaksi')->get();
        return view('karyawan_pemesanan',['status'=>$status]);
    }
    

    public function edit($id_transaksi) {
        $status = transaksi::find($id_transaksi);
        return view('karyawan_edit', ['status' => $status]);
    }


     public function updated($id_transaksi, Request $request) {
         $status = transaksi::find($id_transaksi);
         $status->status = $request->status;
         $status->save();
        
     return redirect("/karyawan/pemesanan");
     }

     public function pendapatan(){
        $pendapatan = pendapatan1::paginate(5);
        return view('karyawan_pendapatan',['pendapatan'=>$pendapatan]);
       
    }

    
    
    
}