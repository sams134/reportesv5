<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_movements_type extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public const MOVEMENTS_TYPE_INICIAL = 1;
    public const MOVEMENTS_TYPE_COMPRA = 2;
    public const MOVEMENTS_TYPE_CONSIGNACION = 3;
    public const MOVEMENTS_TYPE_VENTA = 4;
    public const MOVEMENTS_TYPE_DESPACHO_OS = 5;
    public const MOVEMENTS_TYPE_DESPACHO_TALLER = 6;
    public const MOVEMENTS_TYPE_OTRO = 7;

    public function material_movements()
    {
        return $this->hasMany(Material_movement::class);
    }
}
