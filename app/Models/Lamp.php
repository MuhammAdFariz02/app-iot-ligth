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
    protected $fillable = ['status'];

    protected $casts = ['status' => 'boolean'];
}
