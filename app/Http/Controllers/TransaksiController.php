<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\status_pembayaran;
use App\Models\Tagihan;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request){
        $transaksis = transaksi::with('tagihans','mahasiswas','statusp')->get();
        return view('transaksi.index',compact('transaksis'));
    }
    public function create()
    {
        $mhs = Mahasiswa::all();
        $tgn = Tagihan::all();
        $sp = status_pembayaran::all();
        return view('transaksi.create', compact('mhs','tgn','sp'));
    }
    function store(Request $request)
    {

        // dd($request->all());

        $validate = $request ->validate([
            "mahasiswas_id" => 'required',
            "tagihans_id" => 'required',
            "status_pembayarans_id" => 'required'
        ]
        );

        transaksi::create([
        'mahasiswas_id'=>$request->mahasiswas_id,
        'tagihan_id'=>$request->tagihans_id,
        'status_pembayarans_id'=>$request->status_pembayarans_id
        ]);
        return redirect('/transaksi')->with('pesan', 'Data Berhasil Di Input');
    }
    public function update(transaksi $transaksi)
    {
        $mhs = Mahasiswa::all();
        $tgn = Tagihan::all();
        $sp = status_pembayaran::all();
        return view('transaksi.update', compact('transaksi','mhs','tgn','sp'));
    }
    public function edit(Request $request, transaksi $transaksi)
    {
        $validate = $request ->validate([
            "mahasiswas_id" => 'required',
            "tagihans_id" => 'required',
            "status_pembayarans_id" => 'required'
        ]
        );

        $transaksi->update($validate);
        return redirect('/transaksi')->with('pesan', 'Data Berhasil Di updtate');
    }
    public function hapus($id)
    {
        $transaksi = transaksi::where('id', $id)->delete();
        return redirect('/transaksi')->with('pesan','Data Berhasil Di Hapus');
    }
}
