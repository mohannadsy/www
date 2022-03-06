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
            $table->unsignedBigInteger('bill_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('store_id');
            $table->string('unit_1'); // الوحدة الاولي
            $table->string('unit_2')->nullable(); // الوحدة الثانية
            $table->string('unit_3')->nullable(); // الوحدة الثالثة
            $table->string('unit_1_quantity');  // الكمية المباعة او المشتراة حسب الوحدة الاولى
            $table->string('unit_2_quantity')->nullable();// الكمية المباعة او المشتراة حسب الوحدة الثانية
            $table->string('unit_3_quantity')->nullable();// الكمية المباعة او المشتراة حسب الوحدة الثالثة
            $table->string('price'); // السعر الافرادي
            $table->string('unit_2_price')->nullable(); // سعر الوحدة الثانية
            $table->string('unit_3_price')->nullable(); // سعر الوحدة الثانية
            $table->string('unit_2_operation')->nullable(); // معامل تحويل الوحدة الثانية
            $table->string('unit_3_operation')->nullable(); // معامل تحويل الوحدة الثالثة
            $table->string('discount')->nullable(); // الحسم
            $table->string('note')->nullable();
            $table->string('current_quantity')->nullable(); // الكمية الحالية بعد عملية البيع او الشراء
            $table->string('price_type')->nullable(); // جملة - مفرق - اخر شراء - كلفة
            $table->string('total_weight')->nullable(); // الوزن القائم
            $table->string('real_weight')->nullable(); // الوزن الصافي
            $table->decimal('total_price')->nullable(); // السعر الاحجمالي
            $table->string('real_price')->nullable(); // السعر النهائي
            $table->date('date_production')->nullable(); // تاريخ الانتاج
            $table->date('date_expired')->nullable(); // تاريخ الصلاحية


            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();

            // foreign keys
            $table->foreign('bill_id')->references('id')->on('bills');
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('store_id')->references('id')->on('stores');
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
