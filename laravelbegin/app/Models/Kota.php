<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    /** @use HasFactory<\Database\Factories\KotaFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'jumlah_penduduk'
    ];

    public function pesantren(){
        return $this->hasMany(Pesantren::class);
    }
}
