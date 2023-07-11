<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alur extends Model
{
    use HasFactory;
    protected $table = 'alurs';
    protected $fillable = [
        'id_alur',
        'id_panduan',
        'id',
        'nama_alur',
        'lahan',
        'pengingat_tgl',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function panduan()
    {
        return $this->belongsTo(Panduan::class, 'id_panduan');
    }
}
