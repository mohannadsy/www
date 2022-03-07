<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'code',
        'name',
        'note',
        'type', // خدمية او مستودعية
        'policy_price', // سياسة التسعير
        'serial_number_in', // check
        'serial_number_out', // check

        'size',
        'source',
        'company',
        'country',
        'model',

        'max_value',
        'min_value',
        'current_quantity',
        'order_limit',

        // unit 1
        'unit_1',
        'unit_1_jomlah', // سعر الجملة
        'unit_1_dist', // سعر الموزع
        'unit_1_export', // سعر التصدير
        'unit_1_customer', // سعر المستهلك
        'unit_1_photo',
        // unit 2
        'unit_2',
        'unit_2_op',
        'unit_2_jomlah',
        'unit_2_dist',
        'unit_2_export',
        'unit_2_customer',
        'unit_2_photo',
        // unit 3
        'unit_3',
        'unit_3_op',
        'unit_3_jomlah',
        'unit_3_dist',
        'unit_3_export',
        'unit_3_customer',
        'unit_3_photo',


        'category_id',
        'currency_id',

        'created_by',
        'updated_by',
        'deleted_by'
    ];
    protected $hidden='';


    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function currency(){
        return $this->belongsTo('App\Models\Currency');
    }
    public function barcodes(){
        return $this->hasMany('App\Models\Barcode');
    }

//    public function bills(){
//        return $this->belongsToMany('App\Models\Bill' , 'bill_item');
//    }

}
