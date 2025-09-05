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
            $table->boolean('home_page')->default(false);
            $table->boolean('published')->default(false);
            $table->text('short_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('realizations', function (Blueprint $table) {
            $table->dropColumn(['home_page', 'published' ,'short_desc']);
        });
    }
};
