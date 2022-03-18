<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateState1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state1s', function (Blueprint $table) {
            $table->id();
            $table->text('s_id')->nullable();
            $table->text('name')->nullable();
            $table->text('section1')->nullable();
            $table->text('section2')->nullable();
            $table->text('video')->nullable();
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
        Schema::dropIfExists('state1s');
    }
}
