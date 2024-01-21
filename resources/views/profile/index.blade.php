@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="d-grid col-10">
            <div class="card">
                <div class="card-header">
                    <h5>Data Mahasiswa</h5>
                </div>
                <div class="card-body">
                    <table class="table-stripped table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>NO HP</th>
                        <th>GAMBAR</th>
                        <th>PROSES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $prf)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $prf->users['name'] }}</td>
                        <td>{{ $prf->users['email'] }}</td>
                        <td>{{ $prf->alamat }}</td>
                        <td>{{ $prf->no_hp }}</td>
                        <td>{{ $prf->gambar }}</td>
                        <td>
                            <a href="/mahasiswa/{{ $prf->id }}" class="btn btn-info btn-sm">Update</a>
                            <a href="/mahasiswa/hapus/{{$prf->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/mahasiswa/create" class="btn btn-outline-secondary" type="button">Buat</a>
                <div class="card">
        </div>
            </div>
        </div>
    </div>
@endsection
