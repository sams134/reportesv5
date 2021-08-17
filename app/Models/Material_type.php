<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_type extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dimensional()
    {
        return $this->belongsTo(Dimensional::class);
    }
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
