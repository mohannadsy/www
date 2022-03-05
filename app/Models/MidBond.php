<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MidBond extends Model
{
    use HasFactory;
//    protected $table='';
    protected $fillable=[
        'code',
        'main_date',
        'date_to_send',
        'main_note',
        // اسطر الجدول
        'main_account_id',
        'other_account_id',
        'maden',
        'daen',
        'date',
        'currency_id',
        'note',
        'balance',
        'cost_center_id',
        // نهاية اسطر الجدول

        'total_maden',
        'total_daen',
        'final_total', // total = total_maden - total_daen


        'created_by',
        'updated_by',
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
    public function costCenter(){
        return $this->belongsTo('App\Models\CostCenter');
    }
}
