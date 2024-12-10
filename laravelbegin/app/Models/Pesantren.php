<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model
{
    /** @use HasFactory<\Database\Factories\PesantrenFactory> */
    use HasFactory;

    //fillable
    protected $fillable = [
        'nama',
        'id_kota',
        'alamat',
        'no_rek',
        'jumlah_santri',
        'email',
    ];
}
