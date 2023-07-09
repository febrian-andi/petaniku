<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmpedia extends Model
{
    use HasFactory;
    protected $table = 'farmpedia';

    protected $fillable = [
        'judul',
        'isi',
    ];
}
