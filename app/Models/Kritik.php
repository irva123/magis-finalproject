<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    protected $table = 'kritik_dan_saran';
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'isi_pesan',
    ];
    public function kritik()
    {
        return $this->belongsTo(Kritik::class, 'id');
    }
}
