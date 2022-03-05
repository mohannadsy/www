<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public static function createRole($role){
        $roleType = isset($role['type']) ? $role['type'] : null;
        Role::create([
           'name' => $role['name'],
           'table' => $role['table'],
           'operation' => $role['operation'],
            'type' => $roleType
       ]);
    }

    public static function getRoleId($table , $operation , $type = null){
        return Role::where('table' , $table)->where('operation' , $operation)->where('type' , $type)->first()->id;
    }

    public static function giveRole($role_id , $user_id){
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id
        ]);
    }

    public static function revokeRole($role_id , $user_id){
        DB::table('role_user')->where('role_id' , $role_id)->where('user_id' , $user_id)->delete();
    }

}
