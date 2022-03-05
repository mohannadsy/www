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

            $table->integer('main_account_id'); // الحساب
            $table->integer('other_account_id'); // الحساب المقابل
            $table->integer('discount_account_id'); // حساب الحسم
            $table->integer('currency_id');
//            $table->integer('installment_account_id');

            $table->integer('cost_center_id')->nullable();  // مركز الكلفة التابع له


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
        Schema::dropIfExists('bills');
    }
}
