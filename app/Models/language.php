<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Eloquent;
use Illuminate\Support\Facades\Eloquent;
class language extends Authenticatable
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
        'id','name','abbr','native','active','direction','local','Created_at','updated_at',
    ];
    // ########################################
    public function scopeActive($query){
        return $query->where('active',1);
    }
    public function scopeselection($query){

        return $query->select('name','abbr','direction','active');


    }

  // #############################################

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

