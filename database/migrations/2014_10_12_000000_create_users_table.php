<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('is_admin')->default('0');
            $table->rememberToken();
            $table->timestamps();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();


        });

        DB::table('users')->insert(
            array(
                'email' => 'admin@admin.com',
                'name' => 'admin',
                'is_admin' => '1',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'mohannad@gmail.com',
                'name' => 'Mohannad',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'sara@gmail.com',
                'name' => 'Sara',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'raghad@gmail.com',
                'name' => 'Raghad',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'clauda@gmail.com',
                'name' => 'Clauda',
                'password' => Hash::make('12345678'))
        );
        DB::table('users')->insert(
            array(
                'email' => 'noor@gmail.com',
                'name' => 'Noor',
                'password' => Hash::make('12345678'))
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

}
