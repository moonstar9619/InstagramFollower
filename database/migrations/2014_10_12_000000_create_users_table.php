<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name',255)->nullable();
            $table->float('wallet',8,2)->default(0)->nullable();
            $table->tinyInteger('role');
            $table->string('phone',11)->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['phone','email']);
        });

        /*Schema::create('service_user', function (Blueprint $table) {
           $table->integer('user_id');
           $table->integer('service_id');
           $table->primary(['user_id', 'service_id']);
        });*/

        Schema::create('order_user', function (Blueprint $table) {
           $table->integer('order_id');
           $table->integer('user_id');
           $table->integer('service_id');
           $table->primary(['order_id','user_id', 'service_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('service_user');
    }
}
