<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
    public function mechanical_failure_mode()
    {
        return $this->belongsTo(Mechanical_failure_mode::class);
    }
    public function electrical_failure_mode()
    {
        return $this->belongsTo(Electrical_failure_mode::class);
    }   
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    
}
