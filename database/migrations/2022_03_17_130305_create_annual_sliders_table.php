<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->text('detail')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();

            $table->string('image3')->nullable();

            $table->string('image4')->nullable();

            $table->string('link_text1')->nullable();
            $table->string('link_text2')->nullable();
            $table->string('link_text3')->nullable();
            $table->string('link_text4')->nullable();

            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('link3')->nullable();
            $table->string('link4')->nullable();








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
        Schema::dropIfExists('annual_sliders');
    }
}
