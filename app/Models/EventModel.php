<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'alamat_kegiatan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'penyelenggara_kegiatan',
        'created_at',
        'updated_at',
    ];
    public function event()
{
    return $this->belongsTo(EventModel::class, 'id');
}
}
