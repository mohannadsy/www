<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
//    protected $table='';

    protected $fillable=[

        'code',
        'name',
        'note',

        'category_id',

        'created_by',
        'update_by',
        'deleted_by'
    ];
    protected $hidden='';


    public function category(){
        return $this->hasOne('App\Models\Category');
    }
    public function categories(){
        return $this->hasMany('App\Models\Category');
    }
    public function items(){
        return $this->hasMany('App\Models\Item');
    }

}
