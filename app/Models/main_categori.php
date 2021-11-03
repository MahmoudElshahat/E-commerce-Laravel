<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\suppert\facades\eloquent;
class main_categori extends Authenticatable
{
    use HasFactory ;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='main_categories';
    protected $fillable = [
        'id','name','image_path','translation_language','translation_of','slug','active','photo','Created_at','updated_at',
    ];
      // ########################################
        public function scope_active($query){
            return $query->where('active',1);
        }

      // ############# select function ################################
      public function scopeselection($query){
          return $query->select('id','name','active','slug','image_path',);
      }

    // ###############################################3
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

