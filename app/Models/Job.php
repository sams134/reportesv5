<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Job extends Model
{
    use HasFactory;

    const HP = 0;
    const KW = 1;
    const KVA = 2;

    const PHASES_NO = 0;
    const PHASES_SINGLE = 1;
    const PHASES_DC = 2;
    const PHASES_TRHEE = 3;


    protected $guarded = ['id'];
    

    //query scopes
    public function scopeStatus($query,$status_id)
    {
        if ($status_id == 0)
        {
            return $query->where('status_id',Status::STATUS_EPF)
                        ->orWhere('status_id',Status::STATUS_FACTURADO)
                        ->orWhere('status_id',Status::STATUS_FINALIZADO)
                        ->orWhere('status_id',Status::STATUS_PAGADO);
        }
       
        if($status_id){
            return $query->where('status_id',$status_id);
        }
    }
    public function scopeUser($query,$user_id)
    {
        if ($user_id)
        {
            return $query->whereHas('assignments',function($q) use ($user_id){
                $q->where('user_id',$user_id);
            });
        }
    }
    public function scopeCustomer($query,$customer_id)
    {
        if ($customer_id)
          return $query->where('customer_id',$customer_id);
    }
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
    public function favorites()
    {
        return $this->belongsToMany(User::class,'favorites');
    }
    public function warranties()
    {
        return $this->belongsToMany(Job::class,'warranties','job_id','warranty_id',);
    }
    public function warranty_of()
    {
        return $this->belongsToMany(Job::class,'warranties','warranty_id','job_id',);
    }
    public function sub_orders()
    {
        return $this->belongsToMany(Job::class,'related_jobs','job_id','child_id',);
    }
    public function parent_order()
    {
        return $this->belongsToMany(Job::class,'related_jobs','child_id','job_id',);
    }
    public function old_orders()
    {
        return $this->belongsToMany(Job::class,'traces','job_id','parent_id',);
    }
    public function new_order()
    {
        return $this->belongsToMany(Job::class,'traces','parent_id','job_id',);
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
    public function job_os()
    {
        return $this->year."-".$this->os;
    }
    public function power_dimensional()
    {
        $fullpower = $this->power;
        $fullpower .= $this->hpkw==1?" HP":" KW";
        return $fullpower;
    }
    public function front_images()
    {
        return $this->morphMany(Image::class,'imageable')->where('image_type_id',Image_type::IMAGE_TYPE_JOB_FRONT);
    }
    public function fecha_ingreso()
    {
        $fecha = Carbon::parse($this->date_received)->locale('es');
      
        return $fecha->isoFormat("dddd d MMMM YYYY");
    }

    public function all_old_orders()
    {
       return $this->old_orders()->with('all_old_orders');
    }
    
}
