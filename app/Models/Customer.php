<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
    public function industry()
    {
        return $this->belongsTo('App\models\Industry');
    }
}
