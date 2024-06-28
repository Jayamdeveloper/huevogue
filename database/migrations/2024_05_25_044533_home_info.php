<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("home_info", function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('favicon');
            $table->string('logo');
            $table->text('contenTitle');
            $table->string('phone');
            $table->string('email');
            $table->text('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_info');
    }
};
