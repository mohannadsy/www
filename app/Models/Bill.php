<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'code',
        'date',
        'type',
        'pay_type',
        'main_note',
        'date_to_send',
        'main_account_id',
        'other_account_id',
        'discount_account_id',
        'currency_id',
        'cost_center_id',

        'created_by',
        'update_by',
        'deleted_by'
    ];
    protected $hidden='';

    public function currency(){
        return $this->belongsTo('App\Models\Currency');
    }
//    public function mainAccount(){
//        return $this->belongsTo('App\Models\Account');
//    }
//    public function otherAccount(){
//        return $this->belongsTo('App\Models\Account');
//    }
//    public function discountAccount(){
//        return $this->belongsTo('App\Models\Account');
//    }

    public function costCenter(){
        return $this->belongsTo('App\Models\CostCenter');
    }


//    public function items(){
//        return $this->belongsToMany('App\Models\Item' , 'bill_item');
//    }

}
