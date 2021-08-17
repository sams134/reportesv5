<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electrical_failure_mode extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function diagnostics()
    {
        return $this->hasMany(Diagnostic::class);
    }
}
