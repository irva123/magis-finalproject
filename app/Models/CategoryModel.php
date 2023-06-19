<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
use HasFactory;
protected $table = 'category';
protected $guarded = ['id'];
protected $fillable = [
    'nama',
    'foto',
    'deskripsi',
    'created_at',
    'updated_at',
];
public function spaces()
{
    return $this->hasMany(Space::class, 'id_category');
}
}
