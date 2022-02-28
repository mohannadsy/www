<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

//    protected $table='';
    protected $fillable=[
        'code',
        'name',
        'note',

//        'max_account_fund',
//        'min_account_fund',

        'account_id', // الحساب الرئيسي// tree // parent // 0 => main // is_final = 0
        'is_final',
        'final_account_id', // الحساب الختامي
        'final_back_too_id',// عائدية الحساب الختامي
        'currency_id',

        'is_client', // if is_cleint = 1 => client_id will be > 0
        'client_name',
        'phone_1',
        'phone_2',
        'phone_3',
        'email',
        'photo',
        'client_note',
        'address_id',

        'created_by',
        'update_by',
        'deleted_by'

    ];
    protected $hidden='';


//    public function client(){
//        return $this->hasOne("App\Models\Client");
//    }
//    public function finalAccount(){
//        return $this->hasOne("App\Models\Account");
//    }
    public function account(){
        return $this->hasOne("App\Models\Account");
    }


    public function currency(){
        return $this->belongsTo("App\Models\Currency");
    }

    public function address(){
        return $this->belongsTo('App\Models\Address');
    }

    //docs
    public function midBonds(){
        return $this->hasMany('App\Models\MidBond');
    }

    public function bills(){
        return $this->hasMany('App\Models\Bill');
    }


}
