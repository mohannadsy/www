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
            $table->string('note');
            $table->string('type'); // مستودعية او خدمية
            $table->string('policy_price'); // سياسة التسعير
            $table->string('serial_number'); // الرقم التسلسلي

            $table->string('size'); // القياس
            $table->string('source'); // المصدر
            $table->string('company'); //الشركة المصنعة
            $table->string('country'); // بلد المنشأ
            $table->string('model'); // الطراز

            $table->string('max_value'); // الحد الاعلى
            $table->string('min_value'); // الحد الادنى
            $table->string('current_quantity'); // الكمية الحالية
            $table->string('order_limit'); // حد الطلب


            // unit 1
            $table->string('unit_1');
            $table->string('unit_1_wholesale'); // سعر جملة
            $table->string('unit_1_dist'); // سعر موزع
            $table->string('unit_1_export'); // سعر تصدير
            $table->string('unit_1_customer'); // سعر مستهلك
            $table->string('unit_1_photo');
            // unit 2
            $table->string('unit_2');
            $table->string('unit_2_op');
            $table->string('unit_2_wholesale');
            $table->string('unit_2_dist');
            $table->string('unit_2_export');
            $table->string('unit_2_customer');
            $table->string('unit_2_photo');
            // unit 3
            $table->string('unit_3');
            $table->string('unit_3_op');
            $table->string('unit_3_wholesale');
            $table->string('unit_3_dist');
            $table->string('unit_3_export');
            $table->string('unit_3_customer');
            $table->string('unit_3_photo');


            $table->integer('category_id');
            $table->integer('currency_id');


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
        Schema::dropIfExists('items');
    }
}
