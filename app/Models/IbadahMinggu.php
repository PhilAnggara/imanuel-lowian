<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IbadahMinggu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ibadah_minggu';

    protected $fillable = [
        'title','tanggal','khadim','pengantar','pem_acara','doa_persembahan','pujian'
    ];


    protected $hidden = [
        
    ];
}
