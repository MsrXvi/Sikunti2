<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $fillable = ['nama_tagihan','harga_tagihan'];
    use HasFactory;
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
