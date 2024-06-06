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
        Schema::create('area', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('distribucion_id');
            $table->decimal('precio', 12, 2);
            
            $table->boolean('status')->default(1);
            $table->boolean('visible')->default(1);
            $table->timestamps();

            $table->foreign('distribucion_id')->references('id')->on('distribucion');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area');
    }
};
