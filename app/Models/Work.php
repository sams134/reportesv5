<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function default_work()
    {
        return $this->belongsTo(Default_work::class);
    }
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
