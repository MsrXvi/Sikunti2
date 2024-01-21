@extends('layouts.app')

@section('content')
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
    </ol>
</div>

<div class="card">
    <div class="card-header">
        List Mahasiswa
    </div>
<div class="card-body">
    <a href="mahasiswa/create" class="btn btn-primary bts-sm mb-3">+Data Mahasiswa</a>

    <div class="tabel-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->kelas['nama_kelas'] }}</td>
                    <td>{{ $mhs->kelas['angkatan'] }}</td>
                    <td>
                        <a href="/mahasiswa/{{ $mhs->id }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#confirm{{ $mhs->id }}">
                        <i class="bi bi-trash"></i> Hapus
                        </button>

                        <div class="modal fade" id="confirm{{ $mhs->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i></i> Peringatan!</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin Ingin Menghapus Data Mahasiswa Dengan Nama
                                        <b>{{ $mhs->nama }}</b>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                        <a href="/mahasiswa/{{ $mhs->id }}/hapus" class="btn btn-danger">Ya! Happus.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
