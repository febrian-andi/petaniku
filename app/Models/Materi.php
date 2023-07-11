<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materies';
    protected $fillable = [
        'id_materi',
        'id_panduan',
        'tahapan',
        'isi',
        'aturan_jam',
    ];

    public function panduan()
    {
        return $this->belongsTo(Panduan::class, 'id_panduan');
    }
}
