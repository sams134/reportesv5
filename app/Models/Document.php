<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function documentable()
    {
        return $this->morphTo();
    }
    public function doc_type()
    {
        return $this->belongsTo(Doc_type::class);
    }
}
