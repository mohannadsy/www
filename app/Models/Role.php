<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',

        'created_by',
        'updated_by',
        'deleted_by'
    ];


    public function users(){
        return $this->belongsToMany('App\Models\Role' , 'role_user');
    }

}
