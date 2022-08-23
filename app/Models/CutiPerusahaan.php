<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutiPerusahaan extends Model
{
    use HasFactory;
    protected $table = "master_cuti_perusahaan";
    protected $fillable = [
        'id',
        'jumlah_cuti',
        'tahun',
        
    ];
}
