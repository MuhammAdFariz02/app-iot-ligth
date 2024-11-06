<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamp extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari konvensi
    protected $table = 'lamps';

    // Tentukan atribut yang bisa diisi (mass assignable)
    protected $fillable = [
        'lamp_number', // Nomor lampu
        'on_time',     // Waktu hidup
        'off_time',    // Waktu mati
        'status'       // Status lampu
    ];

    // Jika ada relasi dengan model lain, bisa ditambahkan di sini
}
