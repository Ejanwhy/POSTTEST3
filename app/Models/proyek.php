<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyek extends Model
{
    use HasFactory;

    protected $table = 'proyek';

    protected $fillable = [
        'judul_proyek',
        'id_negara',
        'donasi_id'
    ];

    public function Negara()
    {
        return $this->hasOne(negara::class, 'id_negara', 'kode_negara');
    }

    public function Donasi()
    {
        return $this->hasOne(donasi::class, 'id', 'donasi_id');
    }
}
