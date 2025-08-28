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
        Schema::table('projects', function (Blueprint $table) {
            $table->text('short_desc')->nullable(false)->after('title')->change();
            $table->boolean('home_page')->default(false)->after('short_desc')->change();
            $table->boolean('published')->default(false)->after('home_page')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('short_desc')->nullable()->change();
            $table->boolean('home_page')->default(false)->change();
            $table->boolean('published')->default(false)->change();
        });
    }
};
