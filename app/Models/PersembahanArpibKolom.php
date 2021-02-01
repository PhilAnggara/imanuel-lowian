<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersembahanArpibKolom extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'persembahan_arpib_kolom';

    protected $fillable = [
        'arpib_kolom','tanggal','tempat','jumlah','keterangan'
    ];


    protected $hidden = [
        
    ];
}
