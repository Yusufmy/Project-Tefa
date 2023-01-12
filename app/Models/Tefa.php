<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tefa extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'foto_produk',
        'nama_produk',
        'name_jurusan',
        'deskription',
        'status',
    ];
}
