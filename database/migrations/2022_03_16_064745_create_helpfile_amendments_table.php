<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpfileAmendmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpfile_amendments', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('Sub_heading')->nullable();
            $table->text('detail')->nullable();
            $table->text('point1')->nullable();
            $table->text('point2')->nullable();
            $table->text('point3')->nullable();
            $table->text('point4')->nullable();


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
        Schema::dropIfExists('helpfile_amendments');
    }
}
