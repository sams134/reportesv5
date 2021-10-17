<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const STATUS_ORDERED = 1;
    public const STATUS_GIVEN = 2;
    public const STATUS_GIVEN_BACK = 3;
    public const STATUS_BACK_EXPECTED = 4;

    public const FLAG_NORMAL = 1;
    public const FLAG_UNUSUAL = 2;

    protected $guarded = ['id'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function material_movements()
    {
        return $this->hasMany(Material_movement::class);
    }
}
