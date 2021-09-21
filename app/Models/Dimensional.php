<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimensional extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const DIMENSIONAL_UNIDADES = 1;
    public const DIMENSIONAL_PIES = 2;
    public const DIMENSIONAL_METROS = 3;
    public const DIMENSIONAL_YARDAS = 4;
    public const DIMENSIONAL_GALONES = 5;
    public const DIMENSIONAL_MILIMETROS = 6;
    public const DIMENSIONAL_PULGADAS = 7;
    public const DIMENSIONAL_BOTES = 8;
    public const DIMENSIONAL_LIBRAS = 9;
    public const DIMENSIONAL_KILOGRAMOS = 10;
    public const DIMENSIONAL_GRAMOS = 11;
    public const DIMENSIONAL_PLIEGOS = 12;

    public function material_types()
    {
        return $this->hasMany(Material_type::class);
    }
}
