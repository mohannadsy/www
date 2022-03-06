<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
//        DB::table('roles')->insert(['name' => '' , 'table' => '' , 'operation' => '']);
//         RoleController::createRole(['name' => '' , 'table' => '' , 'operation' => '']);
        // Accounts permissions
        RoleController::createRole(['name' => 'create_accounts' , 'table' => 'accounts' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_accounts' , 'table' => 'accounts' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_accounts' , 'table' => 'accounts' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_accounts' , 'table' => 'accounts' , 'operation' => 'view']);

        // Items Permissions
        RoleController::createRole(['name' => 'create_items' , 'table' => 'items' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_items' , 'table' => 'items' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_items' , 'table' => 'items' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_items' , 'table' => 'items' , 'operation' => 'view']);

        // Categories Permissions
        RoleController::createRole(['name' => 'create_categories' , 'table' => 'categories' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_categories' , 'table' => 'categories' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_categories' , 'table' => 'categories' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_categories' , 'table' => 'categories' , 'operation' => 'view']);

        // Stores Permissions
        RoleController::createRole(['name' => 'create_stores' , 'table' => 'stores' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_stores' , 'table' => 'stores' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_stores' , 'table' => 'stores' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_stores' , 'table' => 'stores' , 'operation' => 'view']);

        // mid_bonds Permissions
        RoleController::createRole(['name' => 'create_mid_bonds' , 'table' => 'mid_bonds' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_mid_bonds' , 'table' => 'mid_bonds' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_mid_bonds' , 'table' => 'mid_bonds' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_mid_bonds' , 'table' => 'mid_bonds' , 'operation' => 'view']);

        // catchBonds Permissions
        RoleController::createRole(['name' => 'create_catch_bonds' , 'table' => 'bonds' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_catch_bonds' , 'table' => 'bonds' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_catch_bonds' , 'table' => 'bonds' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_catch_bonds' , 'table' => 'bonds' , 'operation' => 'view']);

        // paymentBonds Permissions
        RoleController::createRole(['name' => 'create_payment_bonds' , 'table' => 'bonds' , 'operation' => 'create']);
        RoleController::createRole(['name' => 'update_payment_bonds' , 'table' => 'bonds' , 'operation' => 'update']);
        RoleController::createRole(['name' => 'delete_payment_bonds' , 'table' => 'bonds' , 'operation' => 'delete']);
        RoleController::createRole(['name' => 'view_payment_bonds' , 'table' => 'bonds' , 'operation' => 'view']);


    }
}
