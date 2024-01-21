@extends('layouts.app')

@section ('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/tagihan">Data Tagihan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Tagihan</li>
    </ol>
</nav>

<form action="/tagihan" method="post" class="card">
    @csrf
    <div class="card-header">
        Form Tagihan
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nama_tagihan">NAMA TAGIHAN</label>
                    <input type="text" class="form-control @error('nama_tagihan') is-invalid @enderror"
                    value="{{ old('nama_tagihan') }}" name="nama_tagihan" id="nama_tagihan">
                    @error('nama_tagihan')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="harga_tagihan">HARGA TAGIHAN</label>
                    <input type="text" class="form-control @error('harga_tagihan') is-invalid @enderror"
                    value="{{ old('harga_tagihan') }}" name="harga_tagihan" id="harga_tagihan">
                    @error('harga_tagihan')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i> Simpan</button>
        <a href="/tagihan" class="btn btn-danger">Kembali</a>
    </div>
</form>
@endsection
