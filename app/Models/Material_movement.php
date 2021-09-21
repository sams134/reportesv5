<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_movement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
