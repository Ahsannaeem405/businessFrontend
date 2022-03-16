<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClosellcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closellcs', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->text('detail')->nullable();
            $table->text('video_heading')->nullable();
            $table->text('video_link')->nullable();





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
        Schema::dropIfExists('closellcs');
    }
}
