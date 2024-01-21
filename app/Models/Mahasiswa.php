<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim', 'kelas_id', 'alamat'];
    use HasFactory;
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
