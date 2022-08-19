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
        Schema::create('top_bars', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('service')->nullable();
            $table->string('service_link')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact_link')->nullable();
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
        Schema::dropIfExists('top_bars');
    }
};
