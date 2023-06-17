<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkerModel extends Model
{
    use HasFactory;
    protected $table = "marker";
    protected $guarded = ['id'];
    public function spaces()
    {
    return $this->hasMany(Space::class, 'id_marker');
    }
}
