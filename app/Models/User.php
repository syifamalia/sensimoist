<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function criterion_weight()
    {
        return $this->hasMany(CriterionWeight::class);
    }
    
    public function relative_weight()
    {
        return $this->hasMany(RelativeWeight::class);
    }
    
    public function comparison()
    {
        return $this->hasMany(Comparison::class);
    }
    
    public function vector_s()
    {
        return $this->hasMany(VectorS::class);
    }
    
    public function vector_v()
    {
        return $this->hasMany(VectorV::class);
    }
}
