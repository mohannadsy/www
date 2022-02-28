<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'code',
        'name',
        'equal',
        'balance',
        'part_name',
        'part_value',
        'is_main',

        'created_by',
        'updated_by',
        'deleted_by'

    ];
    protected $hidden='';

    public function accounts(){
        $this->hasMany('App\Models\Account');
    }

    public function items(){
        $this->hasMany('App\Models\Item');
    }

    public function bills(){
        $this->hasMany('App\Models\Bill');
    }

    public function midBonds(){
        $this->hasMany('App\Models\MidBond');
    }

}
