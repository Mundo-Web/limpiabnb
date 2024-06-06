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
        Schema::create('distribucion', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('espacios_id');
            
            $table->boolean('status')->default(1);
            $table->boolean('visible')->default(1);
            $table->timestamps();

            $table->foreign('espacios_id')->references('id')->on('espacios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distribucion');
    }
};
