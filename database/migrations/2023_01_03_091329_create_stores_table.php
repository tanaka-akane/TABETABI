<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('local_food_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->string('name',100);
            $table->string('overview',300);
            $table->string('adress',200);
            $table->boolean('parking')->default(false);
            $table->boolean('private_room')->default(false);
            $table->boolean('card')->default(false);
            $table->boolean('midnight')->default(false);
            $table->boolean('e_money')->default(false);
            $table->boolean('counter_seat')->default(false);
            $table->boolean('reserve')->default(false);
            $table->boolean('take_out')->default(false);
            $table->boolean('child')->default(false);
            $table->string('image_path',150)->nullable();
            $table->double('score_average')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
