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
        Schema::create('site_info', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone');
            $table->string('phone2');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('status');
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
        Schema::dropIfExists('site_info');
    }
};
