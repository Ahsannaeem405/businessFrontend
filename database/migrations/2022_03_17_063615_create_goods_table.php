<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('heading1')->nullable();
            $table->string('heading2')->nullable();
            $table->string('heading3')->nullable();
            $table->string('certificate1')->nullable();
            $table->string('certificate2')->nullable();
            $table->string('certificate3')->nullable();
            $table->text('detail1')->nullable();
            $table->text('detail2')->nullable();
                $table->text('detail3')->nullable();




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
        Schema::dropIfExists('goods');
    }
}
