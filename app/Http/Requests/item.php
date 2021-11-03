<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class item extends Authenticatable
{
    use HasFactory;
    protected $table='items';

    protected $fillable=[
        'id','admin_id','active','rate','categori_id','name','price','photo','Created_at','updated_at'
    ];

    // ########### query select data ##########3333
    public function scopeselection($query){
        return  $query-> select('id','active','admin_id','rate','categori_id','name','price','photo');
    }

}// end file
