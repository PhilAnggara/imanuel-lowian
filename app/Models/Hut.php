<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hut extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'hut';

    protected $fillable = [
        'tanggal','nama','keluarga','umur','kolom'
    ];


    protected $hidden = [
        
    ];
}
