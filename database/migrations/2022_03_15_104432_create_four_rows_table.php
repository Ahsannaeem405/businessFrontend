<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFourRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('four_rows', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->string('Sub_heading')->nullable();
            $table->string('Sub_heading2')->nullable();
            $table->string('Sub_heading3')->nullable();



            $table->string('status1')->nullable();
            $table->string('status2')->nullable();

            $table->string('status3')->nullable();

            $table->string('status4')->nullable();
            $table->string('status5')->nullable();
            $table->string('status6')->nullable();
            $table->string('status7')->nullable();
            $table->string('status8')->nullable();

            $table->string('status9')->nullable();
            $table->string('status10')->nullable();
            $table->string('status11')->nullable();
            $table->string('status12')->nullable();



            $table->string('heading1')->nullable();
            $table->text('detail1')->nullable();

            $table->string('heading2')->nullable();
            $table->text('detail2')->nullable();

            $table->string('heading3')->nullable();
            $table->text('detail3')->nullable();

            $table->string('heading4')->nullable();
            $table->text('detail4')->nullable();

            $table->string('heading5')->nullable();
            $table->text('detail5')->nullable();
            $table->string('heading6')->nullable();
            $table->text('detail6')->nullable();
            $table->string('heading7')->nullable();
            $table->text('detail7')->nullable();

            $table->string('heading8')->nullable();
            $table->text('detail8')->nullable();


            $table->string('heading9')->nullable();
            $table->text('detail9')->nullable();
            $table->string('heading10')->nullable();
            $table->text('detail10')->nullable();
            $table->string('heading11')->nullable();
            $table->text('detail11')->nullable();

            $table->string('heading12')->nullable();
            $table->text('detail12')->nullable();




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
        Schema::dropIfExists('four_rows');
    }
}
