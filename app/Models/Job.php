<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    const HP = 0;
    const KW = 1;
    const KVA = 2;

    protected $guarded = ['id'];
    //protected $withCount = ['assignments'];

    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function job_type()
    {
        return $this->belongsTo(Job_type::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
    public function works()
    {
        return $this->hasMany(Work::class);
    }
    public function assignments()
    {
        return $this->belongsToMany(User::class,'assignments')->withTimestamps();;
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function documents()
    {
        return $this->morphMany(Document::class,'documentable');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function materials()
    {
        return $this->belongsToMany(Material::class,'orders');
    }
    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
    public function diagnostic()
    {
        return $this->hasOne(Diagnostic::class);
    }
}
