<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'user_id',
        'ruangan_id',
        'tanggal_pinjam',
        'jam_mulai',
        'jam_selesai',
        'lokasi',
        'keterangan',
        // 'catatan',
        'status',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Ruangan
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

}
