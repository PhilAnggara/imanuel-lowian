<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IbadahArpibKolom extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ibadah_arpib_kolom';

    protected $fillable = [
        'arpib_kolom','tanggal','giliran','tempat'
    ];


    protected $hidden = [
        
    ];
}
