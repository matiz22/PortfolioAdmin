<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('realizations', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('client_name');
            $table->string('client_url')->nullable();
            $table->string('client_logo_url')->nullable();
            $table->string('location')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->json('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Pivot: realization_skill
        Schema::create('realization_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('realization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        // Pivot: realization_technology
        Schema::create('realization_technology', function (Blueprint $table) {
            $table->id();
            $table->foreignId('realization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realization_technology');
        Schema::dropIfExists('realization_skill');
        Schema::dropIfExists('realizations');
    }
};
