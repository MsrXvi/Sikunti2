<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Tagihan;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function Dashboard(){
        $total_mahasiswa=Mahasiswa::count();
        $total_kelas=Kelas::count();
        $total_tagihan=Tagihan::count();
        $total_angkatan=Home::getAllAngkatan()->count('angkatan');
        $total_mhs=Kelas::all();

        foreach ($total_mhs as $key) {
        $da = Kelas::withCount('mahasiswas')->orderBy('angkatan', 'asc')->paginate(10);;

        // $jumlahangkatan = Kelas::withCount('mahasiswas')->orderBy('angkatan', 'asc')->paginate(10);
        }
        //dd($data);
        return view('home', compact('total_mahasiswa', 'total_kelas', 'total_tagihan','total_angkatan', 'da'));
    }
}
