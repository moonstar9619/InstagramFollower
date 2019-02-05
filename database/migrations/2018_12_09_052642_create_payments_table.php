<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->integer('user_id')->unique();
            $table->integer('service_id')->unique();
            $table->string('ref_num');
            $table->string('res_num');
            $table->tinyInteger('status')->defualt(0)->unique();
            $table->float('payment_price');
            $table->smallInteger('method')->defualt(0);
            $table->string('gateway_name',255);
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
        Schema::dropIfExists('payments');
    }
}
