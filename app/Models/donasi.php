<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;


    protected $table = 'donasi';

    // public function proyek(){
    //     return $this->belongsTo(proyek::class, 'id_negara', 'kode_negara');
    // }
}
