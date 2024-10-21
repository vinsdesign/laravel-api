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
        Schema::create('drones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('brand');
            $table->string('airworthiness');
            $table->boolean('operational');
            $table->string('internalSerial')->nullable();
            $table->string('printedSerial')->nullable();
            $table->string('remoteID')->nullable();
            $table->string('registration');
            $table->date('purchased')->nullable();          
            $table->string('notes')->nullable();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drones');
    }
};
