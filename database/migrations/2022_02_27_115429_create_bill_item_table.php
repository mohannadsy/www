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
            $table->string('unit_1'); // الوحدة الاولي
            $table->string('unit_2')->nullable(); // الوحدة الثانية
            $table->string('unit_3')->nullable(); // الوحدة الثالثة
            $table->string('quantity_unit_1');  // الكمية المباعة او المشتراة حسب الوحدة الاولى
            $table->string('quantity_unit_2')->nullable();// الكمية المباعة او المشتراة حسب الوحدة الثانية
            $table->string('quantity_unit_3')->nullable();// الكمية المباعة او المشتراة حسب الوحدة الثالثة
            $table->string('price'); // السعر الافرادي
            $table->string('price_unit_2')->nullable(); // سعر الوحدة الثانية
            $table->string('price_unit_3')->nullable(); // سعر الوحدة الثانية
            $table->string('discount')->nullable(); // الحسم
            $table->string('note')->nullable();
            $table->string('current_quantity')->nullable(); // الكمية الحالية بعد عملية البيع او الشراء
            $table->string('price_type')->nullable(); // جملة - مفرق - اخر شراء - كلفة
            $table->string('total_weight')->nullable(); // الوزن القائم
            $table->string('real_weight')->nullable(); // الوزن الصافي
            $table->string('total_price')->nullable(); // السعر الاحجمالي
            $table->string('real_price')->nullable(); // السعر النهائي
            $table->date('date_production')->nullable(); // تاريخ الانتاج
            $table->date('date_expired')->nullable(); // تاريخ الصلاحية


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
        Schema::dropIfExists('bill_item');
    }
}
