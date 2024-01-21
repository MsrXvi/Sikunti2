@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Kelas</h5>
                </div>
                <form action="/kelas/{{ $kelas->id}}" method="post">
                        <div class="card-body">
                        @csrf
                        @method('PUT')
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" class="form-control @error('nama_kelas') is-invalid
                        @enderror mb-3" name="nama_kelas" id="nama_kelas" value="{{ $kelas->nama_kelas}}">
                        @error('nama_kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid
                        @enderror mb-3" name="angkatan" id="angkatan" value="{{ $kelas->angkatan }}">
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">SIMPAN</button>
                    </div>
                    </form>
        </div>
            </div>
        </div>
    </div>
@endsection
