<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['user_id', 'alamat', 'no_hp', 'gambar'];
    use HasFactory;
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
