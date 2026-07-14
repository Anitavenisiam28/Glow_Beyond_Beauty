<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
protected $fillable = [
    'nama',
    'umur',
    'jenis_kelamin',
    'layanan',
    'tanggal',
    'jam',
    'status'
];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
