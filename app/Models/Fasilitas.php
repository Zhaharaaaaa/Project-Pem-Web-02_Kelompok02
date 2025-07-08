<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = [
        'nama',
        'deskrips',
        'qty',
        'gambar',
    ];

    // Relasi ke Ruangan
    public function ruangans()
    {
        return $this->belongsToMany(Ruangan::class, 'fasilitas_has_ruangans');
    }
}
