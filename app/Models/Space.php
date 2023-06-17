<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;
    protected $table = 'spaces';
    protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'id_category',
        'nama',
        'slug',
        'foto',
        'deskripsi',
        'alamat',
        'titik_koordinat',
        'jam_buka',
        'harga_weekday',
        'harga_weekend',
        'kontak',
        'sosmed',
        'marker',
        'created_at',
        'updated_at',
    ];
    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'id_category');
    }

    public function marker()
    {
        return $this->belongsTo(MarkerModel::class, 'id_marker');
    }

}
