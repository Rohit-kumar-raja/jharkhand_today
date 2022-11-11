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
        Schema::create('edges', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('PRICE');
            $table->string('CONVENIENCE');
            $table->string('DESIGN');
            $table->string('TIMELINES');
            $table->string('QUALITY');
            $table->string('WARRANTY');
            $table->string('SUPPORT');
            $table->boolean('status');
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
        Schema::dropIfExists('edges');
    }
};
