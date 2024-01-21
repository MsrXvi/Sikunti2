<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {

        $kelas = Kelas::with('mahasiswas')->get();
        return view('kelas.index', compact('kelas'));

    }
    public function create()
    {
        return view('kelas.create');
    }
    function store(Request $request)
    {
        $validate = $request->validate(
            [
                "nama_kelas" => 'required',
                "angkatan" => 'required',
            ]
        );


        kelas::create($validate);
        return redirect('/kelas')->with('pesan', 'Data Berhasil Di Input');
    }
    public function update(kelas $kelas)
    {
        return view('kelas.update', compact('kelas'));
    }
    public function edit(Request $request, kelas $kelas)
    {
        $validate = $request->validate(
            [
                "nama_kelas" => 'required',
                "angkatan" => 'required'
            ]
        );
        $kelas->update($validate);
        return redirect('/kelas')->with('pesan', 'Data Berhasil Di Update');
    }
    public function hapus($id)
    {
        $kelas = kelas::where('id', $id)->delete();
        return redirect('/kelas')->with('pesan', 'Data Berhasil Di Hapus');
    }

}
