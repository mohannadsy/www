<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidBondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mid_bonds', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->date('main_date');
            $table->date('date_to_send'); // تاريخ الترحيل
            $table->text('main_note');
//            $table->integer('main_currency_id');
//            $table->string('main_equal');
            // اسطر الجدول
            $table->integer('main_account_id'); // الحساب
            $table->integer('other_account_id'); // الحساب المقابل
            $table->string('maden');
            $table->string('daen');
            $table->date('date');
            $table->integer('currency_id');
            $table->string('note');
            $table->string('balance');
            $table->integer('cost_center_id');  // مركز الكلفة التابع له
            // نهاية اسطر الجدول

            $table->string('total_maden');
            $table->string('total_daen');
            $table->string('final_total');


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
        Schema::dropIfExists('mid_bonds');
    }
}
