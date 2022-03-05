<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'name',
        'note',

        'address_id',


        'created_by',
        'update_by',
        'deleted_by'
    ];
    protected $hidden='';

    public function address(){
        return $this->hasOne('App\Models\Address');
    }

}
