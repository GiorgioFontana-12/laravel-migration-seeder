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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable();
            $table->string('departure_station')->nullable();
            $table->string('arrival_station')->nullable();
            $table->string('departure_date')->nullable();
            $table->time('departure_time', 5)->nullable();
            $table->time('arrival_time', 5)->nullable();
            $table->char('train_code', 30)->nullable();
            $table->smallInteger('coaches_number')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('cancelled')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
