<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{


    /**
     * insert role to roles table in database
     */
    public static function createRole($role)
    {
        $roleType = isset($role['type']) ? $role['type'] : null;
        Role::create([
            'name' => $role['name'],
            'table' => $role['table'],
            'operation' => $role['operation'],
            'type' => $roleType
        ]);
    }

    /**
     * get the id of a role using table name & operation & column type
     */
    public static function getRoleId($table, $operation, $type = null)
    {
        return Role::where('table', $table)->where('operation', $operation)->where('type', $type)->first()->id;
    }

    /**
     * give a specific role to a user
     * insert row to role_user table
     */
    public static function giveRole($role_id, $user_id)
    {
        DB::table('role_user')->insert([
            'role_id' => $role_id,
            'user_id' => $user_id
        ]);
    }

    /**
     * revoke a specific role to a user
     * delete row to role_user table
     */
    public static function revokeRole($role_id, $user_id)
    {
        DB::table('role_user')->where('role_id', $role_id)->where('user_id', $user_id)->delete();
    }

    /**
     * check if a user have this role
     */
    public static function haveRole($role_id, $user_id)
    {
        $row = DB::table('role_user')->where('role_id', $role_id)->where('user_id', $user_id)->get();
        if (count($row) > 0)
            return true;
        return false;
    }

    /**
     * give all roles to user
     * insert all role ids to role_user table
     */
    public static function giveAllRoles($user_id)
    {
        $roles = Role::get();
        foreach ($roles as $role) {
            RoleController::giveRole($role->id, $user_id);
        }
    }

}
