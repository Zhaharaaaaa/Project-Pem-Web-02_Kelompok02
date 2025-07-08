<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangans';

    protected $fillable = [
        'gambar',
        'nama',
        'kode',
        'lokasi_ruangan',
        'kapasitas',
        'status',
    ];

    #relasi ke fasilitas
    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'fasilitas_has_ruangans');
    }
    
    #relasi ke peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    #relasi ke pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);    
    }
}
