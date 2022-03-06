<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleController::giveAllRoles(1);
    }
}
