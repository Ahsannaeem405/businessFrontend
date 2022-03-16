<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqDissolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_dissolutions', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();

            $table->text('q1')->nullable();
            $table->text('q2')->nullable();
            $table->text('q3')->nullable();
            $table->text('q4')->nullable();
            $table->text('q5')->nullable();

            $table->text('a1')->nullable();
            $table->text('a2')->nullable();
            $table->text('a3')->nullable();
            $table->text('a4')->nullable();
            $table->text('a5')->nullable();
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
        Schema::dropIfExists('faq_dissolutions');
    }
}
