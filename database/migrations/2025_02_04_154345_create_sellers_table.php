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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->nullable();
            $table->string('iva')->nullable();
            $table->string('buisnessAddress')->nullable();
            $table->string('buisnessCity')->nullable();
            $table->string('companyWebSite')->nullable();
            $table->string('contactEmail')->nullable();
            $table->string('contactNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
