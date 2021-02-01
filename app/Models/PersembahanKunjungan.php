<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersembahanKunjungan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'persembahan_kunjungan';

    protected $fillable = [
        'nama','keluarga','kolom','jumlah','keterangan'
    ];


    protected $hidden = [
        
    ];
}
