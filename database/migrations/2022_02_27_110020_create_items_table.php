<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('note')->nullable();
            $table->string('type'); // مستودعية او خدمية
            $table->string('policy_price')->nullable(); // سياسة التسعير
            $table->string('serial_number')->nullable(); // الرقم التسلسلي

            $table->string('size')->nullable(); // القياس
            $table->string('source')->nullable(); // المصدر
            $table->string('company')->nullable(); //الشركة المصنعة
            $table->string('country')->nullable(); // بلد المنشأ
            $table->string('model')->nullable(); // الطراز

            $table->string('max_value')->nullable(); // الحد الاعلى
            $table->string('min_value')->nullable(); // الحد الادنى
            $table->string('current_quantity')->nullable(); // الكمية الحالية
            $table->string('order_limit')->nullable(); // حد الطلب


            // unit 1
            $table->string('unit_1');
            $table->string('unit_1_wholesale')->nullable(); // سعر جملة
            $table->string('unit_1_dist')->nullable(); // سعر موزع
            $table->string('unit_1_export')->nullable(); // سعر تصدير
            $table->string('unit_1_customer')->nullable(); // سعر مستهلك
            $table->string('unit_1_photo')->nullable();
            // unit 2
            $table->string('unit_2')->nullable();
            $table->string('unit_2_op')->nullable();
            $table->string('unit_2_wholesale')->nullable();
            $table->string('unit_2_dist')->nullable();
            $table->string('unit_2_export')->nullable();
            $table->string('unit_2_customer')->nullable();
            $table->string('unit_2_photo')->nullable();
            // unit 3
            $table->string('unit_3')->nullable();
            $table->string('unit_3_op')->nullable();
            $table->string('unit_3_wholesale')->nullable();
            $table->string('unit_3_dist')->nullable();
            $table->string('unit_3_export')->nullable();
            $table->string('unit_3_customer')->nullable();
            $table->string('unit_3_photo')->nullable();


            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('currency_id');


            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();

            // foreign keys
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('currency_id')->references('id')->on('currencies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
