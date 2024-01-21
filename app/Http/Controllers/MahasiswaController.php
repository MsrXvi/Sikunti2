<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::with('kelas')->get();
        return view('Mahasiswa.index',compact('mahasiswas'));
    }
    public function create()
    {
        $kls = kelas::all();
        return view('mahasiswa.create', compact('kls'));
    }
    function store(Request $request)
    {
        $validate = $request ->validate([
            "nama" => 'required',
            "nim" => 'required|alpha_num|max:10|min:10|unique:mahasiswas,nim',
            "kelas_id" => 'required',
            "alamat" => 'required'
        ]
        );

        mahasiswa::create($validate);
        return redirect('/mahasiswa')->with('pesan', 'Data Berhasil Di Input');
    }
    public function update(mahasiswa $mahasiswa)
    {
        $kls = Kelas::all();
        return view('mahasiswa.update', compact('mahasiswa', 'kls'));
    }
    public function edit(Request $request, mahasiswa $mahasiswa)
    {
        $validate = $request ->validate([
            "nama" => 'required',
            "nim" => 'required|alpha_num|max:10|min:10|unique:mahasiswas,nim,'.$mahasiswa->nim.',nim',
            "kelas_id" => 'required',
            "alamat" => 'required'
        ]
        );
        $mahasiswa->update($validate);
        return redirect('/mahasiswa')->with('pesan','Data Berhasil Di Update');
    }
    public function hapus($id)
    {
        $mahasiswa = mahasiswa::where('id', $id)->delete();
        return redirect('/mahasiswa')->with('pesan','Data Berhasil Di Hapus');
    }
}
