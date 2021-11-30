<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public const STATUS_SIN_ASIGNAR = 1;
    public const STATUS_DIAGNOSTICO = 2;
    public const STATUS_TRABAJANDO = 3;
    public const STATUS_FINALIZADO = 4;
    public const STATUS_EPF = 5;
    public const STATUS_FACTURADO = 6;
    public const STATUS_PAGADO = 7;
    
    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}
