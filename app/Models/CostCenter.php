<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenter extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'note',
        'cost_center_id',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function category(){
        return $this->hasOne('App\Models\CostCenter');
    }
    public function midBonds(){
        return $this->hasMany('App\Models\MidBond');
    }

    public function bills(){
        return $this->hasMany('App\Models\Bill');
    }
}
