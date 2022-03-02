<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();

            $table->string('code');
            $table->string('name');
            $table->text('note')->nullable();
//            $table->string('max_account_fund'); // اعلى رصيد يمكن ادخاله لهذا الحساب
//            $table->string('min_account_fund');  // ادنى رصيد يمكن ادخاله لهذا الحساب

            $table->integer('account_id'); // tree // parent // 0 => main // is_final = 0
            $table->integer('is_final');
            $table->integer('final_account_id'); // final // 0 => main // is_final = 1
            $table->integer('final_back_to_id'); // عائدية الحساب الختامي
            $table->integer('currency_id')->nullable();



            $table->integer('is_client'); // 1 or 0
            // Client Section
            $table->string('client_name')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->string('client_note')->nullable();

            $table->integer('address_id')->nullable();



            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
