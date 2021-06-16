<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaksi;

use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
	{
		$transaksi = transaksi::all();
		return view('transaksi',['transaksi'=>$transaksi]);
	}
 
	public function export_excel()
	{
		return Excel::download(new TransaksiExport, 'transaksi.xlsx');
	}
}
