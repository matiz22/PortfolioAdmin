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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->json('institution');
            $table->json('degree');
            $table->json('field_of_study');
            $table->string('grade')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_current')->default(false);
            $table->integer('order')->default(0);
            $table->json('description')->nullable();
            $table->timestamps();
        });
        Schema::create('education_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_id')->constrained()->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('education_technology', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_id')->constrained()->cascadeOnDelete();
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }


    /**
     * Revers migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_technology');
        Schema::dropIfExists('education_skill');
        Schema::dropIfExists('educations');
    }
};
