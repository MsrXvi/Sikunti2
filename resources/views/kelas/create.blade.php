@extends('layouts.app')

@section ('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/kelas">Data Kelas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Kelas</li>
    </ol>
</nav>

<form action="/kelas" method="post" class="card">
    @csrf
    <div class="card-header">
        Form Kelas
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nama_kelas">NAMA KELAS</label>
                    <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                    value="{{ old('nama_kelas') }}" name="nama_kelas" id="nama_kelas">
                    @error('nama_kelas')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="angkatan">ANGKATAN</label>
                    <input type="text" class="form-control @error('angkatan') is-invalid @enderror"
                    value="{{ old('angkatan') }}" name="angkatan" id="angkatan">
                    @error('angkatan')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i> Simpan</button>
        <a href="/kelas" class="btn btn-danger">Kembali</a>
    </div>
</form>
@endsection
