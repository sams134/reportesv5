<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material_movements_type;

class Material extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeMaterial_type($query, $material_type_id)
    {
        if ($material_type_id)
            return $query->whereHas('material_type', function ($q) use ($material_type_id) {
                $q->where('material_type_id', $material_type_id);
            });
    }
    public function scopeMaterial_like($query, $material_like)
    {
        if ($material_like)
            return $query->whereHas('material_type', function ($q) use ($material_like) {
                $q->where('name', 'like', "%" . $material_like . "%");
            })->orWhere('name', 'like', "%" . $material_like . "%");
    }
    
    public function document()
    {
        return $this->morphOne(Document::class, 'documentable');
    }
    public function material_type()
    {
        return $this->belongsTo(Material_type::class);
    }
    public function material_movements()
    {
        return $this->hasMany(Material_movement::class)->orderBy('id','desc');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function getExistencyAttribute()
    {
        return $this->material_movements->sum('quantity');
    }
   
    public function buys()
    {
        return $this->hasMany(Material_movement::class)->orderBy('id','desc')->where('material_movements_type_id','<=',3);
    }
    public function delivers()
    {
        return $this->hasMany(Material_movement::class)->orderBy('id','desc')->where('material_movements_type_id','>',3);
    }
}
