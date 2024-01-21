<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['mahasiswas_id', 'tagihan_id','status_pembayarans_id'];
    use HasFactory;
    public function mahasiswas()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function tagihans()
    {
        return $this->belongsTo(Tagihan::class,'tagihan_id');
    }
    public function statusp()
    {
        return $this->belongsTo(status_pembayaran::class,'status_pembayarans_id');
    }
}
