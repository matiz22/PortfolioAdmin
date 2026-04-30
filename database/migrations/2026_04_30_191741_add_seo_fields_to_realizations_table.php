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
        Schema::table('realizations', function (Blueprint $table) {
            $table->boolean('seo_enabled')->default(false);
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('realizations', function (Blueprint $table) {
            $table->dropColumn([
                'seo_enabled',
                'seo_title',
                'seo_keywords',
            ]);
        });
    }
};
