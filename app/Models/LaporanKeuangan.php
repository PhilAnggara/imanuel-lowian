<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaporanKeuangan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'laporan_keuangan';

    protected $fillable = [
        'tanggal','uraian','masuk','keluar'
    ];


    protected $hidden = [
        
    ];
}
