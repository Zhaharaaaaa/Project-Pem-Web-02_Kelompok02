<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekapan extends Model
{
    protected $table = 'peminjaman'; // penting: singular

    protected $fillable = [
        'tanggal_peminjaman',
        'jam_mulai',
        'jam_selesai',
        'tempat_pinjam',
        'keterangan',
        'status',
        'user_id',
        'ruangan_id',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
