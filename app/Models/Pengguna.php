<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
     protected $table = 'pengguna';

    protected $fillable = [
        'user_id',
        'nim',
        'prodi',
        'no_telpon',
        'email',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
