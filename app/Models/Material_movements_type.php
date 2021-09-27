<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_movements_type extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function material_movements()
    {
        return $this->hasMany(Material_movement::class);
    }
}
