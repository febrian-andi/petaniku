<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    use HasFactory;
    protected $table = 'panduans';
    protected $fillable = [
        'id_panduan',
        'judul',
    ];

    public function materi()
    {
        return $this->hasOne(Materi::class, 'id_materi');
    }

    public function alur()
    {
        return $this->hasMany(Alur::class, 'id_alur');
    }

}
