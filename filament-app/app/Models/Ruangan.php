<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';

    protected $fillable = [
        'kode',
        'nama',
        'status',
    ];

    public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class);
    }
}
