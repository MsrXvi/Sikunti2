@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Transaksi</h5>
                </div>
                <form action="/transaksi/{{ $transaksi->id}}" method="post">
                    <div class="form-group">
                        @csrf
                        @method('PUT')
                        <label for="mahasiswa">Nama Mahasiswa</label>
                        <select class="form-control select2" style="width: 100%" name="mahasiswas_id" id="mahasiswas_id">
                        <option disabled value>Pilih Mahasiswa</option>
                        <option value="{{ $transaksi->mahasiswas_id }}">{{ $transaksi->mahasiswas->nama }}</option>
                        @foreach ($mhs as $mahasiswa)
                            <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tagihan">Tagihan</label>
                        <select class="form-control select2" style="width: 100%" name="tagihans_id" id="tagihans_id">
                        <option disabled value>Pilih Tagihan</option>
                        <option value="{{ $transaksi->tagihan_id }}">{{ $transaksi->tagihans->nama_tagihan }}</option>
                        @foreach ($tgn as $tagihan)
                            <option value="{{ $tagihan->id }}">{{ $tagihan->nama_tagihan }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_pembayaran">Status</label>
                        <select class="form-control select2" style="width: 100%" name="status_pembayarans_id" id="status_pembayarans_id">
                        <option disabled value>Pilih Status</option>
                        <option value="{{ $transaksi->status_pembayarans_id }}">{{ $transaksi->statusp->status_pembayaran }}</option>
                        @foreach ($sp as $status_pembayaran)
                            <option value="{{ $status_pembayaran->id }}">{{ $status_pembayaran->status_pembayaran }}</option>
                        @endforeach
                        </select>
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
