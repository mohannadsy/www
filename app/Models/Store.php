<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'code',
        'name',
        'note',

        'address_id',
        'store_id',

        'created_by',
        'updated_by',
        'deleted_by'
    ];
    protected $hidden='';


    public function address(){
        return $this->belongsTo('App\Models\Address');
    }
    public function store(){
        return $this->hasOne("App\Models\Store");
    }


}
