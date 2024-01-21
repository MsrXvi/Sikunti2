<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_pembayaran extends Model
{   Protected $fillable = ['status_pembayaran'];
    use HasFactory;
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
}
