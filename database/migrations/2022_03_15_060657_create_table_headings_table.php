<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHeadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_headings', function (Blueprint $table) {
            $table->id();
            $table->string('Heading')->nullable();
            $table->string('Heading1')->nullable();
            $table->string('Heading2')->nullable();
            $table->string('Heading3')->nullable();
            $table->string('Heading4')->nullable();
            $table->string('Heading5')->nullable();






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
        Schema::dropIfExists('table_headings');
    }
}
