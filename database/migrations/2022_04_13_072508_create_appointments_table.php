<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable();
            $table->foreignId('userid')->nullable();
            $table->foreignId('lawyer_id')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            //$table->string('price');
            $table->string('payment');
            $table->string('note')->nullable();
            $table->string('ip')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('appointments');
    }
};
