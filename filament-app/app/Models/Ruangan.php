<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ruangan'; // <-- TAMBAHKAN BARIS INI

    protected $fillable = [
        'nama_ruangan',
        'deskripsi',
        'fasilitas',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
