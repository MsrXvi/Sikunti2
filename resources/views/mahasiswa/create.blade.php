@extends('layouts.app')

@section ('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/mahasiswa">Data Mahasiswa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Mahasiswa</li>
    </ol>
</nav>

<form action="/mahasiswa" method="post" class="card">
    @csrf
    <div class="card-header">
        Form Mahasiswa
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}" name="nama" id="nama">
                    @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="nim">Nim Mahasiswa</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror"
                    value="{{ old('nim') }}" name="nim" id="nim">
                    @error('nim')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select name="kelas_id" id="kelas_id"
                    class="form-select @error('kelas_id') is-invalid @enderror" value="{{ old('kelas_id') }}">
                    <option value="">Pilih Kelas</option>
                    @foreach ($kls as $kelas)
                        <option value="{{ $kelas->id }}">- {{ $kelas->nama_kelas }}</option>
                    @endforeach
                    </select>
                    @error('kelas_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                        value="{{ old('alamat') }}" name="alamat" id="alamat">
                        @error('alamat')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    <select name="kelas_id" id="kelas_id"
                    class="form-select @error('kelas_id') is-invalid @enderror" value="{{ old('kelas_id') }}">
                    <option value="">Pilih Angkatan</option>
                    @foreach ($kls as $kelas)
                        <option value="{{ $kelas->id }}">- {{ $kelas->angkatan }}</option>
                    @endforeach
                    </select>
                    @error('kelas_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary"><i class="bi bi-floopy"></i> Simpan</button>
        <a href="/mahasiswa" class="btn btn-danger">Kembali</a>
    </div>
</form>
@endsection
