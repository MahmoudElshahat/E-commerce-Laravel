<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Eloquent;
use Illuminate\Support\Facades\Eloquent;
use Tymon\JWTAuth\Contracts\JWTSubject;
class language extends Authenticatable implements jwtSubject
{
    use HasFactory ;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='languages';
    protected $fillable = [
        'id','name_ar','name_en','abbr','native','active','direction','local','Created_at','updated_at',
    ];
    // ########################################
    public function scopeActive($query){
        return $query->where('active',1);
    }
    public function scopeselection($query){

        return $query->select('name_ar','name_en','abbr','direction','active');


    }

  // ########################## jwt abstract function ###################
public function getJWTIdentifier()
{

}

// ===============================
public function getJWTCustomClaims()
{
return[];
}
//   #################3

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

