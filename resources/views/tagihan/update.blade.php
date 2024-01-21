@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Tagihan</h5>
                </div>
                <form action="/tagihan/{{ $tagihan->id}}" method="post">
                        <div class="card-body">
                        @csrf
                        @method('PUT')
                        <label for="nama_tagihan">Nama Tagihan</label>
                        <input type="text" class="form-control @error('nama_tagihan') is-invalid
                        @enderror mb-3" name="nama_tagihan" id="nama_tagihan" value="{{ $tagihan->nama_tagihan}}">
                        @error('nama_tagihan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="harga_tagihan">Harga Tagihan</label>
                        <input type="text" class="form-control @error('harga_tagihan') is-invalid
                        @enderror mb-3" name="harga_tagihan" id="harga_tagihan" value="{{ $tagihan->harga_tagihan }}">
                        @error('harga_tagihan')
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
