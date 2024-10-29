<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Pastikan trait ini diimpor
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory; // Gunakan huruf kecil untuk 'use'

    protected $table = "siswas"; // Nama tabel
    protected $fillable = ['nama', 'email', 'umur']; // Field yang dapat diisi massal
    public $timestamps = true; // Aktifkan timestamp
}
