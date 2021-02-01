<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'surat';

    protected $fillable = [
        'title','tanggal','nomor','perihal','sumber','kategori','gambar'
    ];


    protected $hidden = [
        
    ];
}
