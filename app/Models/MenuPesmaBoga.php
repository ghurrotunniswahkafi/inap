<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPesmaBoga extends Model
{
    use HasFactory;
    
    protected $table = 'menu_pesma_boga';
    
    protected $fillable = [
        'nama_menu',
        'jenis',
        'harga',
        'deskripsi',
        'tersedia'
    ];

    protected $casts = [
        'tersedia' => 'boolean',
        'harga' => 'integer'
    ];
}
