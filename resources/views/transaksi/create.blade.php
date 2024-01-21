@extends('layouts.app')

@section ('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/transaksi">Data Transaksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Transaksi</li>
    </ol>
</nav>

<form action="/transaksi" method="post" class="card">
    @csrf
    <div class="card-header">
        Form Transaksi
    </div>
    <div class="card-body">

        <div class="col-lg-6">
            <div class="form-group">
                <label for="Nama">Nama</label>
                <select name="mahasiswas_id" id="mahasiswas_id"
                class="form-select @error('mahasiswa_id') is-invalid @enderror" value="{{ old('mahasiswa_id') }}">
                <option value="">Pilih Mahasiswa</option>
                @foreach ($mhs as $mahasiswa)
                    <option value="{{ $mahasiswa->id }}">- {{ $mahasiswa->nama }}</option>
                @endforeach
                </select>
                @error('mahasiswa_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="Tagihan">Tagihan</label>
                <select name="tagihans_id" id="tagihans_id"
                class="form-select @error('tagihan_id') is-invalid @enderror" value="{{ old('tagihan_id') }}">
                <option value="">Pilih Tagihan</option>
                @foreach ($tgn as $tagihan)
                    <option value="{{ $tagihan->id }}">- {{ $tagihan->nama_tagihan }}</option>
                @endforeach
                </select>
                @error('tagihan_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran</label>
                <select name="status_pembayarans_id" id="status_pembayarans_id"
                class="form-select @error('status_pembayaran_id') is-invalid @enderror" value="{{ old('status_pembayaran_id') }}">
                <option value="">Pilih Status</option>
                @foreach ($sp as $status_pembayaran)
                    <option value="{{ $status_pembayaran->id }}">- {{ $status_pembayaran->status_pembayaran }}</option>
                @endforeach
                </select>
                @error('status_pembayaran_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i> Simpan</button>
        <a href="/transaksi" class="btn btn-danger">Kembali</a>
    </div>
</form>
@endsection
