<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reasons', function (Blueprint $table) {
            $table->id();
            $table->string('heading1')->nullable();
            $table->string('heading2')->nullable();

            $table->text('point1')->nullable();
            $table->text('point2')->nullable();
            $table->text('point3')->nullable();
            $table->text('point4')->nullable();
            $table->text('point5')->nullable();
            $table->text('point6')->nullable();
            $table->text('point7')->nullable();
            $table->text('point8')->nullable();
            $table->text('detail1')->nullable();
            $table->text('detail2')->nullable();




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
        Schema::dropIfExists('reasons');
    }
}
