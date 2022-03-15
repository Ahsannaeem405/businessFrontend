<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_rows', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->string('Sub_heading')->nullable();
            $table->string('Sub_heading2')->nullable();
            $table->string('status1')->nullable();
            $table->string('status2')->nullable();

            $table->string('status3')->nullable();

            $table->string('status4')->nullable();
            $table->string('status5')->nullable();
            $table->string('status6')->nullable();
            $table->string('status7')->nullable();
            $table->string('status8')->nullable();

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
        Schema::dropIfExists('s_rows');
    }
}
