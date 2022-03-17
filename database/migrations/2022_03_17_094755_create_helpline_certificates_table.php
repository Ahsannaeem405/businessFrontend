<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelplineCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpline_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('Sub_heading')->nullable();
            $table->text('detail')->nullable();
            $table->string('link_text')->nullable();
            $table->string('link')->nullable();





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
        Schema::dropIfExists('helpline_certificates');
    }
}
