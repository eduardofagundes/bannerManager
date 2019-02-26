<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_email');
            $table->string('banner_name');
            $table->string('banner_image');
            $table->integer('banner_imgage_width');
            $table->integer('banner_image_heigth');
            $table->string('banner_alt')->nullable();
            $table->string('banner_top_text')->nullable();
            $table->date('banner_begin')->nullable();
            $table->date('banner_end')->nullable();
            $table->integer('banner_price_model');
            $table->float('banner_price');
            $table->integer('banner_clicks_limit')->nullable();
            $table->integer('banner_clicks')->default(0);
            $table->unsignedInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('banners');
    }
}
