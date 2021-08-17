<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_type extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const IMAGE_TYPE_JOB_FRONT = 1;
    public const IMAGE_TYPE_JOB = 2;

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
