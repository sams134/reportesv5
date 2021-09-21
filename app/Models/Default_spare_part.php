<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Default_spare_part extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function spare_parts()
    {
        return $this->hasMany(Spare_part::class);
    }
}
