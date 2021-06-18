<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use App\Models\transaksi;
use App\Models\pendapatan1;

class adminController extends Controller
{
    public function index() {
        $admin = transaksi::paginate(5);
        return view('admin', ['admin' => $admin]);
    }    

    public function transaksi() {
        // return view('admin_trans');
        $trans = DB::table('transaksi')->get();
        //dd($trans);
        return view('admin_trans',['trans'=>$trans]);
    }
    
    public function transtambah(){
        $trans = DB::table('transaksi')->get();
        return view('admin_transtambah',['trans'=>$trans]);
    }

    // public function pendapatan() {
    //     $total_bayar = DB::table('transaksi')->get()->count();
    //     $total_pelanggan = DB::table('transaksi')->select('name')->count();
    //     $karyawan = DB::table('transaksi')->select('petugas')->count();
    //     return view('admin_pendapatan');
    // }

    public function pendapatan(){
        $pendapatan = pendapatan1::paginate(5);
        return view('admin_pendapatan',['pendapatan'=>$pendapatan]);
       
    }


    public function simpanTrans(Request $request) {
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

   

    public function data_user() {
        $trans = DB::table('users')->get();
        return view('admin_datauser',['trans'=>$trans]);
    }

    public function input_user(){
        $trans = DB::table('users')->get();
        return view('admin_tambahuser',['trans'=>$trans]);
    }


    public function simpan_user(Request $request) {      
        DB::table('users')->insert([         
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'level' => $request->level,
              
        ]);
     
        return redirect('/admin/data_user');
    }

    
        
            // public function filter(Request $request)
            // {
            //  if(request()->ajax())
            //  {
            //   if(!empty($request->from_date))
            //   {
            //    $data = DB::table('transaksi')
            //      ->whereBetween('tgl_cuci', array($request->from_date, $request->to_date))
            //      ->get();
            //   }
            //   else
            //   {
            //    $data = DB::table('transaksi')
            //      ->get();
            //   }
            //   return datatables()->of($data)->make(true);
            //  }
            //  return view('admin_trans');
            // }

            public function searchBydate(Request $request)

            {

                
                $from_date = $request->input('from_date');
                $to_date = $request->input('to_date');

                $trans = DB::table('transaksi')->select()
                ->where('tgl_cuci', '>=', $from_date)
                ->where('tgl_cuci', '<=', $to_date)
                ->get();
                // dd($query);
                
                return view('admin_trans', ['trans'=>$trans]);

            }


            public function dataCuci() {

                $trans = DB::table('informasi')->get();
                return view('admin_notif',['trans'=>$trans]);
            }
        
            public function input_gratis(){
                $trans = DB::table('informasi')->get();
                return view('admin_gratiscuci',['trans'=>$trans]);
            }
        
        
            public function simpan_gratis(Request $request) {      
                DB::table('informasi')->insert([         
                    'name' => $request->name,
                    'informasi' => $request->informasi,
                   
                      
                ]);
     
            return redirect('/admin/dataCuci');
        }
    
    
}