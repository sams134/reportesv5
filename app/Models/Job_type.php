<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_type extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
   
}
