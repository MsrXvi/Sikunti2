@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Mahasiswa</h5>
                </div>
                <form action="/mahasiswa/{{ $mahasiswa->id}}" method="post">
                        <div class="card-body">
                        @csrf
                        @method('PUT')
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid
                        @enderror mb-3" name="nama" id="nama" value="{{ $mahasiswa->nama}}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid
                        @enderror mb-3" name="nim" id="nim" value="{{ $mahasiswa->nim }}">
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control select2" style="width: 100%" name="kelas_id" id="kelas_id">
                            <option disabled value>Pilih Kelas</option>
                            <option value="{{ $mahasiswa->kelas_id }}">{{ $mahasiswa->kelas->nama_kelas }}</option>
                            @foreach ($kls as $kelas)
                                <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan</label>
                            <select class="form-control select2" style="width: 100%" name="kelas_id" id="kelas_id">
                            <option disabled value>Pilih Angkatan</option>
                            <option value="{{ $mahasiswa->kelas_id }}">{{ $mahasiswa->kelas->angkatan }}</option>
                            @foreach ($kls as $kelas)
                                <option value="{{ $kelas->id }}">{{ $kelas->angkatan }}</option>
                            @endforeach
                            </select>
                        </div>
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid
                        @enderror mb-3" name="alamat" id="alamat" value="{{ $mahasiswa->alamat }}">
                        @error('alamat')
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
