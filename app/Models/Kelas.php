<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas', 'angkatan'];
    use HasFactory;
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
