<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'barcode',

        // barcode to unit in item
        'unit_number', // set 1 or 2 or 3
        'item_id',


        'created_by',
        'update_by',
        'deleted_by'
    ];
    protected $hidden='';

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }


}
