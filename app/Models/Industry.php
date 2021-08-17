<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function customer()
    {
        return $this->hasMany('App\models\Customer');
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
