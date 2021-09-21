<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spare_part extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function default_spare_part()
    {
        return $this->belongsTo(Default_spare_part::class);
    }
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function documents()
    {
        return $this->morphMany(Document::class,'documentable');
    }
}
