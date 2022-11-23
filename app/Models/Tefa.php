<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tefa extends Model
{
    use HasFactory;
    protected $fillabel = [
        'user_id',
        'title',
        'description',
        'date',
        'satatus',
        'done_time',
    ];
}
