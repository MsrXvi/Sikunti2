<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;
    protected $table = "kelas";
    protected $guarded = [];



    public static function getAllAngkatan(){
        $query= DB::table('kelas');
        return $query;
    }
}
