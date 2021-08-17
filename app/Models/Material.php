<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function documents()
    {
        return $this->morphMany(Document::class,'documentable');
    }
    public function material_type()
    {
        return $this->belongsTo(Material_type::class);
    }
    public function material_movements()
    {
        return $this->hasMany(Material_movement::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
}
