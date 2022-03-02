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
            $table->date('date_to_send')->nullable(); // تاريخ الترحيل
            $table->text('main_note')->nullable();
//            $table->integer('main_currency_id');
//            $table->string('main_equal');
            // اسطر الجدول
            $table->integer('main_account_id'); // الحساب
            $table->integer('other_account_id'); // الحساب المقابل
            $table->string('maden')->default('0');
            $table->string('daen')->default('0');
            $table->date('date')->nullable();
            $table->integer('currency_id');
            $table->string('note')->nullable();
            $table->string('balance')->nullable();
            $table->integer('cost_center_id');  // مركز الكلفة التابع له
            // نهاية اسطر الجدول

            $table->string('total_maden')->default('0');
            $table->string('total_daen')->default('0');
            $table->string('final_total')->default('0');


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
        Schema::dropIfExists('mid_bonds');
    }
}
