<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        $tagihans = Tagihan::get();
        return view('tagihan.index', compact('tagihans'));
    }
    public function create()
    {
        $mhs = Mahasiswa::all();
        return view('tagihan.create', compact('mhs'));
    }
    function store(Request $request)
    {
        $validate = $request->validate(
            [
                "nama_tagihan" => 'required',
                "harga_tagihan" => 'required',
            ]
        );


        Tagihan::create($validate);
        return redirect('/tagihan')->with('pesan', 'Data Berhasil Di Input');
    }
    public function update(Tagihan $tagihan)
    {
        return view('tagihan.update', compact('tagihan'));
    }
    public function edit(Request $request, Tagihan $tagihan)
    {
        $validate = $request->validate(
            [
                "nama_tagihan" => 'required',
                "harga_tagihan" => 'required'
            ]
        );
        $tagihan->update($validate);
        return redirect('/tagihan')->with('pesan', 'Data Berhasil Di Update');
    }
    public function hapus($id)
    {
        $tagihan = Tagihan::where('id', $id)->delete();
        return redirect('/tagihan')->with('pesan','Data Berhasil Di Hapus');
    }
}
