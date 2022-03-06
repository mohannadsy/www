<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->date('date');
            $table->string('type'); // مبيعات - مشتريات - مرتجع مبيعات - مرتجع مشتريات
            $table->string('pay_type'); // نقدي - اجل - تقسيط
            $table->string('main_note')->nullable();
            $table->date('date_to_send')->nullable();
            $table->string('discount_value')->nullable();
            $table->string('discount_ratio')->nullable();

            $table->unsignedBigInteger('main_account_id'); // الحساب
            $table->unsignedBigInteger('other_account_id'); // الحساب المقابل
            $table->unsignedBigInteger('discount_account_id'); // حساب الحسم
            $table->unsignedBigInteger('currency_id');
            //            $table->integer('installment_account_id');

            $table->unsignedBigInteger('cost_center_id')->nullable();  // مركز الكلفة التابع له


            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();

            // foreign keys
            $table->foreign('main_account_id')->references('id')->on('accounts');
            $table->foreign('other_account_id')->references('id')->on('accounts');
            $table->foreign('discount_account_id')->references('id')->on('accounts');
            $table->foreign('currency_id')->references('id')->on('currencies');
            $table->foreign('cost_center_id')->references('id')->on('cost_centers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
