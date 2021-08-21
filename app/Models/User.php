<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'active'
    ];

    protected $withCount = [
        'jobs',
        'current_jobs',
        'finished_jobs',
        'stoped_jobs'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public const USER_DEVELOPER = 1;
    public const USER_MANAGER = 2;
    public const USER_TECHNICIAN = 3;
    public const USER_HELP = 4;
    public const USER_TESTING = 5;
    public const USER_LATHE = 6;
    public const USER_WAREHOUSE = 7;

    public function jobs()
    {
        return $this->belongsToMany(Job::class,'assignments');
    }
    public function current_jobs()
    {
        return $this->belongsToMany(Job::class,'assignments')->whereHas('status',function($q){
            $q->where('id',Status::STATUS_TRABAJANDO);
        });
    }
    public function stoped_jobs()
    {
        return $this->belongsToMany(Job::class,'assignments')->whereHas('status',function($q){
            $q->where('id',Status::STATUS_DIAGNOSTICO);
        });
    }
    public function finished_jobs()
    {
        return $this->belongsToMany(Job::class,'assignments')->whereHas('status',function($q){
            $q->where('id',Status::STATUS_FINALIZADO)
                ->orWhere('id',Status::STATUS_EPF)
                ->orWhere('id',Status::STATUS_FACTURADO)
                ->orWhere('id',Status::STATUS_PAGADO);
        });
    }
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function material_movements()
    {
        return $this->hasMany(Material_movement::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
        
    }
    

}
