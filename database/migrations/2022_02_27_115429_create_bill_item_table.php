<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_item', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id');
            $table->integer('item_id');
            $table->integer('store_id');
            $table->string('quantity'); // الكمية المباعة او المشتراة
            $table->string('price'); // السعر الافرادي
            $table->string('discount'); // الحسم
            $table->string('note');
            $table->string('current_quantity'); // الكمية الحالية بعد عملية البيع او الشراء
            $table->string('price_type'); // جملة - مفرق - اخر شراء - كلفة
            $table->string('total_weight'); // الوزن القائم
            $table->string('real_weight'); // الوزن الصافي
            $table->string('total_price'); // السعر الاحجمالي
            $table->string('real_price'); // السعر النهائي
            $table->date('date_production'); // تاريخ الانتاج
            $table->date('date_expired'); // تاريخ الصلاحية


            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_by');
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
        Schema::dropIfExists('bill_item');
    }
}
