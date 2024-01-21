@extends('layouts.app')

@section('content')
<div aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
    </ol>
</div>

<div class="card">
    <div class="card-header">
        List Transaksi
    </div>
<div class="card-body">
    <a href="transaksi/create" class="btn btn-primary bts-sm mb-3">+Data Transaksi</a>

    <div class="tabel-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tagihan</th>
                    <th>Status</th>
                    <th>Fitur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $tran)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tran->mahasiswas['nama'] }}</td>
                    <td>{{ $tran->tagihans['nama_tagihan'] }}</td>
                    <td>{{ $tran->statusp['status_pembayaran']}}</td>
                    <td>
                        <a href="/transaksi/{{ $tran->id }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#confirm{{ $tran->id }}">
                        <i class="bi bi-trash"></i> Hapus
                        </button>

                        <div class="modal fade" id="confirm{{ $tran->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><i></i> Peringatan!</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin Ingin Menghapus Data Transaksi Dengan Nama
                                        <b>{{ $tran->mahasiswas->nama }}</b>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                        <a href="/transaksi/{{ $tran->id }}/hapus" class="btn btn-danger">Ya! Happus.</a>
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
