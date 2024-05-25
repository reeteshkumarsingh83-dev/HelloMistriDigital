<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
            $table->string('time_duration')->nullable();
            $table->string('affordable_amount')->nullable();
            $table->text('Benefits')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('plans');
    }
}
