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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_icon')->nullable();
            $table->string('service_image')->nullable();
            $table->string('title');
            $table->string('short_detail')->nullable();
            $table->longText('detail')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('solution')->nullable();
            $table->json('steps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
