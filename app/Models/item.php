<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class item extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table='items';

    public $timestamps = false;
    protected $fillable=[
        'id',
        'admin_id',
        'active',
        'rate',
        'category_id',
        'name',
        'price',
        'image_path',
        'Created_at',
        'update_at'
    ];

    // ########### query select data #########
    public function scopeselection($query){
        return  $query-> select('id','active','admin_id','rate','category_id','name','price','image_path');
    }

    // ######################\
    public function __construct($query){
         $query-> select('id','active','admin_id','rate','category_id','name','price','image_path');

    }

}// end file
